<div>
    <div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h3 class="page-title">Keuangan</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{route('wali.dashboard')}}"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Keuangan Siswa</li>
								<li class="breadcrumb-item active" aria-current="page">Tagihan </li>
							</ol>
						</nav>
					</div>
				</div>

			</div>
		</div>
        <section class="content">

		  <div class="row">
			  <div class="col-12">
				<div class="box">
				  <div class="box-body">
					<div class="row">
                            <div class="mb-2 col-xl-3 col-lg-3 col-md-3 col-12">
                                <select wire:model.live="paginate" name="" id="" class="w-auto form-select-sm custom-select">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>

                            </div>
                            {{-- Nama siswa : {{$nama_pd}} --}}
                            @if ($ordertagihans->count() >= 1)

                            <div class="mb-2 col-xl-3 col-lg-3 col-md-3 col-12">
                                <div class="form-group">
                                    <h5>Jumlah order bayar : {{$ordertagihans->count()}}  <a href=""></a></h5>
                                </div>
                            </div>
                            @endif
                            <div class="mb-2 ms-auto col-md-5 col-lg-5 col-12 ">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="search" wire:model.live.debounce.500ms="search" class="form-control" wire:keydown.escape="resetSearch" wire:keydown.tab="resetSearch" class="float-right form-control" placeholder="Search by ...">
                                        <span class="input-group-text"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <x-flash-message/>

                        @if ($datatagihansiswa->count())
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-lg-12 col-12">
                                <div class="table-responsive">
                                    <table class="table mb-0 table-hover">
                                        <tbody>
                                            <tr>
                                                <th width="4%" scope="col">#</th>
                                                <th width="10%" scope="col">NISN</th>
                                                @foreach ($headersTable as $key => $value)
                                                <th scope="col" wire:click.prevent="sortBy('{{ $key }}')" style="cursor: pointer">
                                                    {{ $value }}
                                                    @if ($sortColumn == $key)
                                                    <span>{!! $sortDirection == 'asc' ? '&#8659':'&#8657' !!}</span>
                                                    @endif
                                                </th>
                                                @endforeach
                                                <th width="5%" scope="col">Jenis Tagihan</th>
                                                <th scope="col">Periode Bulan</th>
                                                <th width="5%" scope="col">Besaran</th>
                                                <th width="5%" scope="col">Status</th>
                                                <th  scope="col">Aksi</th>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            @foreach ($datatagihansiswa as $no =>  $item)
                                            <tr>
                                                <th class="text-right" scope="row">{{ $no + $datatagihansiswa->firstItem() }}</th>
                                                <td>
                                                    {{ $item->pesertadidik->nisn }}
                                                </td>
                                                <td>
                                                    {{ !empty($item->pesertadidik_id) ? $item->pesertadidik->nama:'' }}
                                                </td>
                                                <td>
                                                    {{ $item->jenistagihan->nama }}
                                                </td>
                                                <td>
                                                    {{ $item->periode_bulan }}
                                                </td>
                                                <td>
                                                    {{ $item->nilai_tagihan }}
                                                </td>
                                                <td>
                                                    {!! $item->statuslabel !!}
                                                </td>
                                                 <td>
                                                    <button wire:click="selectItem('{{ $item->id }}', 'bayartagihan')" class="btn btn-xs btn-primary" title="Tambah Pembayaran">
                                                        <span class="fw-bold"><i class="fa fa-plus"></i> Order Bayar </span>
                                                    </button>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <div class="mt-3 row">
                                    <div class="col-xl-12 col-md-12 col-lg-12 col-12 ">
                                        @if ($datatagihansiswa->total() > 10)
                                        {{ $datatagihansiswa->links() }}
                                        @else
                                        Page : {{ $datatagihansiswa->currentPage() }} | Show {{ $datatagihansiswa->count() }} data
                                        of {{ $datatagihansiswa->total() }}
                                        @endif
                                    </div>
                                </div>
                                @else
                                <h2 style="color: red" class="text-center">Data not available</h2>
                                @endif

                            </div>
                        </div>
				  </div>
				</div>
			  </div>
		  </div>

		</section>
</div>
