<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Members pending verification') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row">
                        <!-- Repeat this column block for 25 times for 5x5 grid -->
                        @foreach ($users as $item)               
                        <div class="col-md-3 mb-4">
                            <div class="card">
                                <img src="{{ asset("storage/dp/$item->path") }}" class="card-img-top" alt="Image">
                                <div class="card-body">
                                    <h5 class="card-title">Name: {{$item->name}}</h5>
                                    @if($item->verified==0)
                                    <small class="card-text"><b>Status: <span class="badge bg-danger text-light">UNVERIFIED</span></b></small><br>
                                    @else
                                    <small class="card-text"><b><span class="badge bg-success text-light">MEMBER</span></b></small><br>

                                    @endif
                                    <small class="card-text"><b>Service Number:</b> {{$item->service_number}}</small><br>
                                    <small class="card-text"><b>Cadet Number:</b> {{$item->cadet_number}}</small><br>
                                    <small class="card-text"><b>SBC:</b> {{$item->sbc}}</small><br>
                                    <small class="card-text"><b>Phone:</b> {{$item->phone}}</small><br>
                                    <small class="card-text"><b>Email:</b> {{$item->email}}</small><br>
                                    <small class="card-text"><b>Address:</b> {{$item->address}}</small>
                                   
                                </div>
                                <form action="{{ route('verify.now')}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input style="display:none;" type="text" name="service_number" value={{$item->service_number}}>
                                    <button type="submit" class="btn btn-dark">Validate</button>
                                </form>
                            </div>
                        </div>
                        @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>