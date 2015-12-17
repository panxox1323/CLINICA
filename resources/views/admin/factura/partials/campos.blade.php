<div class="detalle">

    <button type="button" onclick="nuevoInsumo();" class="btn btn-success"><span class="icon-plus"></span> A&ntilde;adir Insumo</button>
    <table class="table table-striped table-bordered table-hover">
        <tr class="info ">
             <th class="text-center item-factura">Item</th>
             <th class="text-center item-insumo">Insumo</th>
             <th class="text-center item-cantidad">Vencimiento</th>
             <th class="text-center item-cantidad">Cantidad</th>
             <th class="text-center item-valor">Valor</th>
             <th class="text-center item-subtotal">SubTotal</th>
        </tr>
        <tbody id="tbDetalle">

        </tbody>
    </table>

    <div class="valores-factura">
        <div id="divTotales">
            <table>
                <tr>
                    <th class="padding-valores">Subtotal</th>
                    <td>
                        {!! Form::text('Subtotal', null, ['class' => 'text-center', 'readonly' => 'readonly', 'id' => 'subtotal']) !!}
                    </td>
                </tr>
                <tr>
                    <th class="padding-valores">Iva(19%)</th>
                    <td>
                        {!! Form::text('Iva', null, ['class' => 'text-center', 'readonly' => 'readonly', 'name' => 'iva', 'id' => 'iva']) !!}
                    </td>
                </tr>
                <tr>
                    <th class="padding-valores">Total</th>
                    <td>
                        {!! Form::text('Total', null, ['class' => 'text-center', 'readonly' => 'readonly', 'name' => 'total', 'id' => 'total']) !!}
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div>
        <button type="submit" class="btn btn-info"><span class="icon-archive"></span> Guardar</button>
        <a href="{!! route('admin.factura.index') !!}" class="btn btn-warning btn-md"><span class="icon-cancel-circle"></span> Cancelar</a>
    </div>

</div>
<script type="text/javascript">

    $var =1;

    document.getElementById('subtotal').value= 0;
    document.getElementById('iva').value= 0;
    document.getElementById('total').value= 0;

    function calcular()
    {
        cantidad = document.getElementsByName('cantidad[]');
        precios = document.getElementsByName('precio[]');
        subtotal = document.getElementsByName('sub-total[]');

        var_subtotal = 0;
        for(x=0; x < cantidad.length; x++)
        {
            signo = $;
            sub = cantidad[x].value * precios[x].value;
            subtotal[x].value = sub;
            var_subtotal =  var_subtotal + sub;
            $var = x;
        }
        iva = Math.round(var_subtotal * 0.19);
        document.getElementById('subtotal').value = var_subtotal;
        document.getElementById('iva').value =  iva;
        document.getElementById('total').value =  iva+var_subtotal;
    }



    function crearItem(nombre)
    {
        td       = document.createElement('td');
        txt      = document.createElement('input');
        txt.setAttribute('name', nombre);
        if($var == 1)
        {
            valor = 1;
            $var = $var +1;
        }
        else
        {
            valor = valor + 1;

        }
        txt.readOnly = true;
        txt.classList.add('item-factura', 'text-center');
        txt.setAttribute('value', valor);
        td.appendChild(txt);
        return td;
    };

    function crearCantidad(nombre, readonly, evento, evento2, evento3)
    {
        td       = document.createElement('td');
        txt      = document.createElement('input');
        txt.type = 'text';
        if(readonly)
        {
            txt.setAttribute('readonly', readonly);
        }
        txt.setAttribute('onkeyup', evento);
        txt.setAttribute('onkeypress', evento2);
        txt.setAttribute('onkeyup', evento3);
        txt.classList.add('item-cantidad', 'text-center');
        txt.setAttribute('name', nombre);
        td.appendChild(txt);
        return td;
        txt.focus();
    };

    function crearInsumo()
    {
        td       = document.createElement('td');
        td.innerHTML = '{!! Form::select("id_insumo[]", $insumo , null, ["class" => "form-control", "id" => "insumoValor", 'onchange' => 'asignarValor();']) !!}';

        return td;
    }
    function crearVencimiento()
    {
        td       = document.createElement('td');
        td.innerHTML = '{!! Form::date("id_vencimiento[]", null)!!}';

        return td;
    }
    function crearValor(nombre, readonly, evento, evento2, evento3)
    {
        td       = document.createElement('td');
        txt      = document.createElement('input');
        txt.type = 'text';
        txt.id   = 'Valoor'

        if(readonly)
        {
            txt.setAttribute('readonly', readonly);
        }
        txt.setAttribute('onkeyup', evento);
        txt.setAttribute('onkeypress', evento2);
        txt.setAttribute('onkey', evento3);
        txt.classList.add('item-valor', 'text-center');
        txt.setAttribute('name', nombre);
        td.appendChild(txt);
        return td;
    };

    function crearSubtotal(nombre, readonly)
    {
        td       = document.createElement('td');
        txt      = document.createElement('input');
        txt.type = 'text';
        if(readonly) {
            txt.setAttribute('readonly', readonly);
        }
        txt.classList.add('item-subtotal', 'text-center');
        txt.setAttribute('name', nombre);
        td.appendChild(txt);
        return td;
    };


    function nuevoInsumo()
    {
        destino = document.getElementById('tbDetalle');
        tr      = document.createElement('tr');
        tr.appendChild(crearItem('det_item[]'));
        tr.appendChild(crearInsumo('id_insumo[]'));
        tr.appendChild(crearVencimiento('id_vencimiento[]'));
        tr.appendChild(crearCantidad('cantidad[]', false, 'calcular()', 'return soloNumeros(event)'));
        tr.appendChild(crearValor('precio[]', false, 'calcular()', 'return soloNumeros(event)', 'format(this)'));
        tr.appendChild(crearSubtotal('sub-total[]', true));
        td = document.createElement('td');
        x  = document.createElement('a');
        x.innerHTML = '<span class="icon-cancel-circle"></span>';
        x.classList.add('btn', 'btn-warning', 'btn-xs');
        x.title = "Eliminar";
        x.setAttribute('onclick', 'eliminarFila(this)');
        td.appendChild(x);
        tr.appendChild(td);
        destino.appendChild(tr);
    }

    function eliminarFila(btn)
    {
        if(confirm('Desea Elimiar esta fila'))
        {
            fila = btn.parentNode.parentNode;
            fila.parentNode.removeChild(fila);
            $var = 1;

            document.getElementById('Subtotal').value =  var_subtotal;
            document.getElementById('Iva').value =  iva;
            document.getElementById('Total').value =  iva+var_subtotal;
        }

    }

    function soloNumeros(e) {

        e = (e) ? e : window.event

        var charCode = (e.which) ? e.which : e.keyCode

        if (charCode > 31 && (charCode < 48 || charCode > 57)) {

            status = "This field accepts numbers only."

            return false

        }

        status = ""

        return true

    }


</script>


