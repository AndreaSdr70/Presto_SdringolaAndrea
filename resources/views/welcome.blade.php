<x-layout>
    @if (session()->has('errorMessage'))
    <div class="alert alert-danger text-center shadow rounded w-50">
        {{session('errorMessage')}}
    </div>
    @endif
    @if (session()->has('message'))
    <div class="alert alert-success text-center shadow rounded w-50">
        {{session('message')}}
    </div>
    @endif
    <div class="container-fluid text-center bg-body-tertiary">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="display-4">Presto.it</h1>
                <div class="my-3">
                    @auth
                    <a class="btn btn-dark" href="{{ route('create.article') }}">{{__('ui.publish')}}</a>
                    @endauth
                </div>
            </div>
            <div class="row height-custom justify-content-center align-items-center">
                @forelse ($articles as $article)
                <div class="col-12 col-md-3">
                    <x-card :article="$article" />
                </div>
                @empty
                <div class="col-12 my-5">
                    <h3 class="text-center">
                        {{__('ui.noCreate')}}
                    </h3>
                </div>
                @endforelse
            </div>            
        </div>
    </div>
</x-layout>