@extends('layouts.app')
@section('content')

<form method="post" action="{{url('bill_save')}}">
        <section class="row p-2">
            <div class="card col-md-3 ml-3 mr-3">

                <div class="card-body">

                        <!-- CROSS Site Request Forgery Protection -->
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone" id="phone">
                        </div>
                        <input type="submit" name="send" value="Submit" class="btn mt-2"
                            style="background: green;padding:5px">


                </div>
            </div>
            <div class="card col-md-8">

                <div class="card-body">

                    <table class="table">
                        <thead>
                            <tr>
                                <th><input type="checkbox" class="p_cbox" id="p_cbox" /></th>
                                <th>Product Name</th>
                                <th>quantity</th>
                                <th>price</th>
                                <th>total</th>
                                <th>Tax</th>
                                <th>Tax Amount</th>
                                <th>sub total</th>
                            </tr>
                        </thead>
                        <tbody id="t_body">

                        </tbody>
                    </table>
                    <div style="max-width:15%;float:right">
                        <input type="text" class="form-control" style="text-align:right !important;"  name="grant_total" id="grant_total" readonly>
                    </div>


                    <div>
                        <button id="add_row" type="button" class="">add</button>
                        <button id="del_row" type="button" class="">del</button>
                    </div>
                </div>

            </div>

        </section>


    </form>



<script>


    let i =1;

    document.getElementById("add_row").addEventListener("click", (event) => {

        var e = document.createElement('tr');

        let h_data = `<td>
                        <input type="checkbox" class="c_cbox" onClick="un_check()"/>
                      </td>
                      <td>
                        <input type="text" class="form-control" name="p_name" id="p_name_${i}">
                      </td>
                      <td>
                        <input type="number" class="form-control calc" name="qty[]" id="qty_${i}">
                      </td>
                      <td>
                        <input type="number" class="form-control calc" name="price[]" id="price_${i}">
                      </td>
                      <td>
                        <input type="number" class="form-control" name="fprice[]" id="fprice_${i}" readonly>
                      </td>
                      <td>
                            <input type="number" class="form-control calc" name="tax_per[]" id="taxp_${i}">
                      </td>
                      <td>
                        <input type="number" class="form-control col-sm-7 " name="tax[]" id="tax_${i}" readonly>
                      </td>
                      <td>
                        <input type="number" class="form-control ltotal" name="ltotal[]" id="ltotal_${i}" readonly>
                      </td>
                         `;

        e.innerHTML = h_data
        document.getElementById("t_body").appendChild(e);
        document.getElementById("p_cbox").checked = false;

        i++;
        ini()
    });



    document.getElementById("del_row").addEventListener("click", (event) => {
        let checkedBoxes = document.querySelectorAll('input[class=c_cbox]:checked');

        checkedBoxes.forEach(element => {
            element.parentNode.parentNode.remove();
        });

    });



    document.getElementById("p_cbox").addEventListener("click", (event) => {

        let checkedBoxes = document.querySelectorAll('input[class=c_cbox]');

        if (document.getElementById("p_cbox").checked) {

            checkedBoxes.forEach(element => {
                element.checked = true;
            });

        } else {
            checkedBoxes.forEach(element => {
                element.checked = false;
            });
            document.getElementById("p_cbox").checked = false;
        }



    });



    function un_check(params) {

        let checkedBoxes = document.querySelectorAll('input[class=c_cbox]');

        checkedBoxes.forEach(element => {
            if (!element.checked) {
                document.getElementById("p_cbox").checked = false;
            }
        });
    }


    function ini() {



    document.querySelectorAll(".calc").forEach(function(element) {


        ['click','change','blur','keyup'].forEach( function(evt) {

            element.addEventListener(evt, ()=>{
                  calc(element.id);
            });

          });


    });

    }

    function calc(id){

        id = id.split('_')[1];
        let qty = parseFloat( (document.getElementById(`qty_${id}`).value) ? document.getElementById(`qty_${id}`).value : 0 ).toFixed(2);
        let price = parseFloat( (document.getElementById(`price_${id}`).value) ? document.getElementById(`price_${id}`).value : 0 ).toFixed(2);
        let taxp = parseFloat( (document.getElementById(`taxp_${id}`).value) ? document.getElementById(`taxp_${id}`).value : 0 ).toFixed(2);



        // console.log(qty);
        // console.log(price);
        // console.log(taxp);


        let fprice = parseFloat ( qty * price ).toFixed(2);

        let ltax_amt = parseFloat( ( (taxp / 100) *  qty ) * price ).toFixed(2);

        console.log(fprice);
        document.getElementById(`fprice_${id}`).value=fprice;
        document.getElementById(`tax_${id}`).value=ltax_amt;

        let ltotal = parseFloat( parseFloat(fprice) + parseFloat(ltax_amt) ).toFixed(2);

        document.getElementById(`ltotal_${id}`).value=ltotal;

        let grant_total = 0 ;

        document.querySelectorAll(".ltotal").forEach(function(element) {



            let value = parseFloat( (element.value) ? element.value : 0 ).toFixed(2);
            console.log(value);
            grant_total = (parseFloat( grant_total ) + parseFloat (value)).toFixed(2) ;
            console.log(grant_total);

        });

        document.getElementById(`grant_total`).value=grant_total;
    }
</script>


@stop
