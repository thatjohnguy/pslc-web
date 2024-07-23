<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Profile') }}
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
                      <div class="col-md-4 col-sm-6">
                        <form action="{{ route('member.update-profile')}}" method="POST">
                          @csrf
                          @method("PUT")
  
                      
  
  
                      
                          <fieldset>
                            {{-- <legend>Disabled fieldset example</legend> --}}
                            <div class="mb-3">
                              <label for="name" class="form-label">Name</label>
                              <input type="text" name="name" id="name" class="form-control" value="{{$user->name}}" placeholder="{{$user->name}}">
                            </div>
                            <div class="mb-3">
                              <label for="cadet_number" class="form-label">Cadet number</label>
                              <input type="number" name="cadet_number" id="cadet_number" value="{{$user->cadet_number}}" class="form-control" placeholder="{{$user->cadet_number}}">
                            </div>
                            
                            <div class="mb-3">
                              <label for="phone" class="form-label">Phone number</label>
                              <input type="text" name="phone" id="phone" value="{{$user->phone}}" class="form-control" placeholder="{{$user->phone}}">
                            </div>
                            
                            
                            <div class="mb-3">
                              <label for="email" class="form-label">Email address</label>
                              <input type="email" name="email" id="email" value="{{$user->email}}" class="form-control" placeholder="{{$user->email}}">
                            </div>
                            
                            
                            
                            
                            <div class="mb-3">
                              <label for="sbc" class="form-label">Select Course</label>
                              <select id="sbc" name="sbc" class="form-select" value="{{$user->sbc}}">
                                  <option>{{$user->sbc}}</option>
                                <option>48</option>
                                <option>49</option>
                                <option>50</option>
                                <option>51</option>
                              </select>
                            </div>
                            
                            
                            <div class="mb-3">
  <label for="address" class="form-label">Address</label>
  <textarea class="form-control" id="address" name="address" value="{{$user->address}}" rows="3"></textarea>
</div>
                            
                            
                            
                            <button type="Submit form" class="btn btn-primary">Submit</button>
                          </fieldset>
                        </form>
                      </div>

                      <div class="col-md-8 col-sm-6">
                          <br><br>
                        <h5>Change display Picture</h5>
                        <img src="{{ asset("storage/dp/$user->path") }}" alt="dp">
                        <form action="{{ route('member.dp')}}" method="POST" enctype="multipart/form-data">
                          @csrf
                                
                          <fieldset>
                            {{-- <legend>Disabled fieldset example</legend> --}}
                            
                            <div class="mb-3">
                              <label for="formFile" class="form-label">Choose display picture</label>
                              <input name='dp' class="form-control" type="file" id="formFile">
                            </div>
                            <button type="Save image" class="btn btn-primary">Upload picture</button>
                          </fieldset>
                        </form>
                      </div>
                       


                       {{-- <p>{{$user->name}}</p> --}}
                        </div>
                        
                        <!-- Repeat till here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
