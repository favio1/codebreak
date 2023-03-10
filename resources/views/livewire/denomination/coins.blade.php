<div class="row sales layout-top-spacinn">
    <div class="col-sm-12">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h4 class="card-title">
                    <b>{{ $componentName }} | {{ $pageTitle }}</b>
                </h4>
                <ul class="tabs tab-pills">
                    <li>
                        <a href="javascript:void(0)"  class="btn btn-dark" data-toggle="modal" data-target="#theModal" style="background:#01284d">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>                            Agregar
                        </a>
                    </li>
                </ul>
            </div>
            @include('common.searchbox')
            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped mt-1">
                        <thead class="text-white" style="background:#01284d">
                            <tr>
                                <th class="table-th text-white">TIPO</th>
                                <th class="table-th text-white text-center">VALOR</th>
                                <th class="table-th text-white text-center">IMAGEN</th>
                                <th class="table-th text-white text-center">ACCION</th>
                            </tr> 
                        </thead>
                        <tbody>
                            @foreach ($data as $coin)
                            <tr>
                                <td><h6 class="text-center">{{ $coin->type }}</h6></td>
                                <td><h6 class="text-center">Bs. {{ number_format( $coin->value,2) }}</h6></td>
                                <td class="text-center">
                                    <span>
                                        <img src="{{ asset('storage/monedas/' .$coin->imagen) }}" alt="imagen de ejemplo" height="70" width="80" class="rounded">
                                    </span>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" wire:click.prevent="Edit({{ $coin->id }})" class="btn btn-dark mtmobile" title="Edit" style="background:#01284d">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                    </a>
                                    <a href="javascript:void(0)" onclick="Confirm('{{ $coin->id }}')" class="btn btn-dark" title="Delete" style="background:#01284d">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
    @include('livewire.denomination.form')
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() { 
        window.livewire.on('show-modal', msg=>{
            $('#theModal').modal('show');
        });

        window.livewire.on('item-added', msg=>{
            $('#theModal').modal('hide');
        });
        window.livewire.on('item-updated', msg=>{
            $('#theModal').modal('hide');
        });
        window.livewire.on('item-deleted', msg=>{
            //noty
        });

        window.livewire.on('modal-show', msg=>{
            $('#theModal').modal('show');
        });
        window.livewire.on('modal-hide', msg=>{
            $('#theModal').modal('hide');
        });

        $('#theModal').on('hidden.bs.modal', function(e) {
            $('.er').css ('display', 'none');
        });
    });

    /*function Confirm(id, products) 
    {
        if(products > 0)
        {
            swal(  { title: "AVISO",
                    text: 'NO SE PUEDE ELIMINAR LA CATEGORIA PORQUE TIENE PRODUCTOS RELACIONADOS',
                    type: "info",
                })
            return;
        }*/
        function Confirm(id) 
        {
        swal({
            title: "CONFIRMAR",
            text: "¿Esta seguro de eliminar el registro?",
            type: "warning",
            showCancelButton: true,
            cancelButtonText: "Cerrar",
            cancelButtonColor: '#fff',
            confirmButtonColor: "#01284d",
            confirmButtonText: "Aceptar"
        }).then(function(result)
        {
            if(result.value)
            {
                window.livewire.emit('deleteRow', id);
                swal.close();
            }
        })
    }
</script>