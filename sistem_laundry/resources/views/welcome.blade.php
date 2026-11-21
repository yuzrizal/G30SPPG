@extends('layouts.main')
@section('content')
<h3 class="mb-4">Dashboard</h3>

<div class="row g-3 mb-4">
    <div class="col-12 col-md-4">
        <div class="card text-bg-primary h-100">
            <div class="card-body">
                <div class="small">Total Pelanggan</div>
                <div class="display-6">{{ $totalPelanggan }}</div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">Pelanggan Terbaru</div>
    <ul class="list-group list-group-flush">
        @forelse ($pelangganTerbaru as $p)
            <li class="list-group-item d-flex justify-content-between">
                <span>{{ $p->nama }}</span>
                <span class="text-muted">{{ $p->no_hp }}</span>
            </li>
        @empty
            <li class="list-group-item text-center">Belum ada data.</li>
        @endforelse
    </ul>
</div>
@endsection