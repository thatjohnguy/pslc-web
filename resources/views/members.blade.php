<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Members') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

{{-- 
                    <div class="card-group">
                        <div class="card">
                          <img class="card-img-top" src="..." alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          </div>
                          <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                          </div>
                        </div>
                        <div class="card">
                          <img class="card-img-top" src="..." alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                          </div>
                          <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                          </div>
                        </div>
                        <div class="card">
                          <img class="card-img-top" src="..." alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                          </div>
                          <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                          </div>
                        </div>
                      </div> --}}



                    <div class="row">
                        <!-- Repeat this column block for 25 times for 5x5 grid -->
                        @foreach ($users as $item)               
                        <div class="col-md-3 mb-4">
                            <div class="card">
                                <img src="{{ asset("storage/dp/$item->path") }}" class="card-img-top" alt="Image">
                                <div class="card-body">
                                    <h5 class="card-title">Name: {{$item->name}}</h5>
                                    @if($item->is_admin==1)
                                    <small class="card-text"><b><span class="badge bg-warning">ADMIN</span></b></small><br>
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
                            </div>
                        </div>
                        @endforeach


                        @php
                       

                        @endphp
                        <!-- Repeat till here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
