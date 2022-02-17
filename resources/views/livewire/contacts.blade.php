<div style="text-align: center">
    <h1>Contacts</h1>

    <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px;">
        <form class="w-50 p-4 rounded" wire:submit.prevent="saveContact" style="text-align: left; background-color: rgb(232, 231, 231)">
         {{-- Alert Message --}}
          <div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
          </div>

          <div class="form-group mb-4 ">
                <label for="name" class="mb-2">Name</label>
                <input type="text" class="form-control" wire:model="name" id="name" aria-describedby="nameHelp" placeholder="Enter name">
                @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group mb-4">
              <label for="email" class="mb-2">Email address</label>
              <input type="email" class="form-control" wire:model="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
              @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
              <label for="mobile">Mobile Number</label>
              <input type="text" class="form-control mb-2" wire:model="mobile" id="mobile" placeholder="Mobile number">
              @error('mobile') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-check mb-2">
              <input type="checkbox" class="form-check-input" id="exampleCheck1" wire:model="isFriend">
              <label class="form-check-label" for="exampleCheck1">Friend Zone?</label>
              @error('isFriend') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="btn btn-primary mx-auto d-flex">Submit</button>
          </form>
    </div>

    <h3>Your Contacts</h3>

    <div class="w-50 d-flex mx-auto" style="display: flex; justify-content: center; align-items: center; ">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Friends</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($contacts as $contact)
          <tr>
            <th scope="row">{{$contact->id}}</th>
            <td>{{$contact->name}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->mobile}}</td>
            @if ($contact->isFriend)
            <td class="table-success">
              Friend
            </td>
            @else
            <td>
            </td>
            @endif
          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
</div>

