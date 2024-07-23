<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                     <div class="row">
                         <div class="col-sm-12" style="margin-bottom: 20px;">
                            <div class="card">
                                <h4 class="card-title">Latest</h4>
                            </div>
                          </div>
                        @foreach($feeds as $feed)

                    
                        <div class="col-sm-12" style="margin-bottom: 20px;">
                            <div class="card">
                              <div class="card-body">
                                <h5 class="card-title">{{$feed->title}}</h5>
                                <footer class="blockquote-footer"><cite title="Source Title">{{$feed->author}}</cite></footer>
                                <a href="#" class="btn btn-dark text-light">Open</a>
                              </div>
                            </div>
                          </div>
                          

                        
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
