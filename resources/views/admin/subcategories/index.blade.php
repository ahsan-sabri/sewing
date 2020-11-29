@extends('layouts.admin')
@section('content')
<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <a class="btn btn-success" href="{{ route("admin.subcategories.create") }}">
            {{ trans('global.add') }} {{ trans('cruds.subcategory.title_singular') }}
        </a>
    </div>
</div>
<div class="card">
    <div class="card-header">
        {{ trans('cruds.subcategory.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-subcategory">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.subcategory.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.subcategory.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.subcategory.fields.slug') }}
                        </th>
                        <th>
                            {{ trans('cruds.subcategory.fields.category_id') }}
                        </th>

                        <th>
                            {{ trans('cruds.subcategory.fields.desc') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $sl = 0;
                    @endphp
                    @foreach($subcategories as $key => $subcategory)
                        <tr data-entry-id="{{ $subcategory->id }}">
                            <td>

                            </td>
                            <td>
                                {{-- {{ $subcategory->id ?? '' }} --}}
                                {{ ++$sl }}
                            </td>
                            <td>
                                {{ $subcategory->name ?? '' }}
                            </td>
                            <td>
                                {{ $subcategory->slug ?? '' }}
                            </td>
                            <td>
                                {{ $subcategory->category->name ?? '' }}
                            </td>

                            <td>
                                {{ $subcategory->desc ?? '' }}
                            </td>
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.subcategories.show', $subcategory->id) }}">
                                    {{ trans('global.view') }}
                                </a>

                                <a class="btn btn-xs btn-info" href="{{ route('admin.subcategories.edit', $subcategory->id) }}">
                                    {{ trans('global.edit') }}
                                </a>

                                <form action="{{ route('admin.subcategories.destroy', $subcategory->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.confirmSubcategoryDelete') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
        let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
        let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
        let deleteButton = {
            text: deleteButtonTrans,
            url: "{{ route('admin.subcategories.mass_destroy') }}",
            className: 'btn-danger',
            action: function (e, dt, node, config) {
            var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
                return $(entry).data('entry-id')
            });

            if (ids.length === 0) {
                alert('{{ trans('global.datatables.zero_selected') }}')

                return
            }

            if (confirm('{{ trans('global.confirmSubcategoryDelete') }}')) {
                $.ajax({
                headers: {'x-csrf-token': _token},
                method: 'POST',
                url: config.url,
                data: { ids: ids, _method: 'DELETE' }})
                .done(function () { location.reload() })
            }
            }
        }
        dtButtons.push(deleteButton)

        $.extend(true, $.fn.dataTable.defaults, {
            order: [[ 1, 'asc' ]],
            pageLength: 100,
        });
        $('.datatable-subcategory:not(.ajaxTable)').DataTable({ buttons: dtButtons })
        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
            $($.fn.dataTable.tables(true)).DataTable()
                .columns.adjust();
        });
    })

</script>
@endsection
