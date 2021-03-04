@extends('layouts.account')

@section('title')
    Laporan Uang Masuk dan Keluar - UANGKU
@stop

@section('content')
  
                @if (isset($debit))
                    <div class="card">
                        <div class="card-header">
                            <h4><i class="fas fa-chart-line"></i> LAPORAN UANG MASUK</h4>
                        </div>

                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col" style="text-align: center;width: 6%">NO.</th>
                                        <th scope="col">KATEGORI</th>
                                        <th scope="col">NOMINAL</th>
                                        <th scope="col">KETERANGAN</th>
                                        <th scope="col">TANGGAL</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($debit as $hasil)
                                        <tr>
                                            <th scope="row" style="text-align: center">{{ $no }}</th>
                                            <td>{{ $hasil->name }}</td>
                                            <td>{{ rupiah($hasil->nominal) }}</td>
                                            <td>{{ $hasil->description }}</td>
                                            <td>{{ $hasil->debit_date }}</td>
                                        </tr>
                                        @php
                                            $no++;
                                        @endphp
                                    @endforeach
                                    </tbody>
                                </table>
                                <div style="text-align: center">
                                    {{$debit->links("vendor.pagination.bootstrap-4")}}
                                </div>
                            </div>

                        </div>
                    </div>
                @endif


            </div>
        </section>
    </div>
@stop
