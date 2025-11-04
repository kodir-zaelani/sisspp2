<div>

    <div class="box-body">
        <div class="row">
            <div class="col-xl-12 col-md-12 col-lg-12 col-12">
                @if ($datayayasan->count())
                <div class="table-responsive">
                    <table class="table mb-0 table-hover">
                        <tbody>
                            <tr>
                                <th width="4%" scope="col">#</th>
                                @foreach ($headersTable as $key => $value)
                                <th scope="col" wire:click.prevent="sortBy('{{ $key }}')" style="cursor: pointer">
                                    {{ $value }}
                                    @if ($sortColumn == $key)
                                    <span>{!! $sortDirection == 'asc' ? '&#8659':'&#8657' !!}</span>
                                    @endif
                                </th>
                                @endforeach
                                <th>Action</th>
                            </tr>
                        </tbody>
                        <tbody>
                            @foreach ($datayayasan as $no =>  $item)
                            <tr>
                                <th class="text-right" scope="row">{{ $no + $datayayasan->firstItem() }}</th>
                                <td>
                                    {{ !empty($item->nama) ? $item->nama:'' }}
                                </td>
                                <td>
                                    {{ !empty($item->province_code ) ? $item->province->name:'' }}
                                </td>
                                <td>
                                    {{ !empty($item->city_code ) ? $item->city->name:'' }}
                                </td>
                                <td class="text-center align-midle">
                                    <button wire:click="view('{{ $item->id }}')" class="btn btn-xs btn-success" title="View"><i class="fa fa-eye "></i></button>
                                    <button wire:click="edit('{{ $item->id }}')" class="btn btn-xs btn-warning" title="Edit"><i class="fa fa-edit "></i></button>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="mt-3 row">
                    <div class="col-xl-12 col-md-12 col-lg-12 col-12 ">
                        @if ($datayayasan->total() > 10)
                        {{ $datayayasan->links() }}
                        @else
                        Page : {{ $datayayasan->currentPage() }} | Show {{ $datayayasan->count() }} data
                        of {{ $datayayasan->total() }}
                        @endif
                    </div>

                </div>
                @else
                <hr>
                <h2 style="color: red" class="text-center">@yield('title') not available</h2>
                @endif
            </div>
        </div>
    </div>
</div>
