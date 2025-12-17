@extends('layouts.web.master', ['title' => 'Kategori'])

@section('content')
    @include('layouts.web.partials.hero')
    <x-web.container>
        <x-web.grid class="lg:grid-cols-12 gap-6">
            <div class="col-span-12">
                <x-web.header title="Daftar Kategori" subtitle="Kumpulan data kategori yang ada di gudang.."
                    url="{{ route('category.index') }}" />
                <x-web.grid class="md:grid-cols-4 gap-6 items-start">
                    @foreach ($categories as $category)
                        <x-web.category-item :category=$category />
                    @endforeach
                </x-web.grid>
            </div>
        </x-web.grid>
    </x-web.container>
@endsection
