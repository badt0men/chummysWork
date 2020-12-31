<div>
    <form wire:submit.prevent="submit">
      <div class="mb-3">
        <label for="fn" class="form-label">Fullname</label>
        <input type="text" class="form-control" id="fn" wire:model="fullname">
        @error('fullname') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" wire:model="email">
        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="pn" class="form-label">Phone number</label>
        <input type="text" class="form-control" id="pn" wire:model="number">
        @error('number') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
      <div class="mb-3">
        <label for="sa" class="form-label">Job/Service Address</label>
        <input type="text" class="form-control" id="sa" wire:model="address">
        @error('address') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
      <div class="mb-3">
        <label for="fn" class="form-label">Type of jobs</label>
        <select class="form-select" aria-label="Default select example" wire:model="job_type">
          <option selected>Open this select menu</option>
          <option>Washing Machine - Installation / Maintenance</option>
          <option>Borehole - Installation / Maintenance</option>
          <option>Plumbing - Installation / Maintenance</option>
          <option>Painting - Maintenance</option>
          <option>Taila - Installation / Maintenance</option>
          <option>3D - Installation / Maintenance</option>
          <option>Wallpaper - Installation / Maintenance</option>
          <option>P O P - Installation / Maintenance</option>
          <option>Electrical - Installation / Maintenance</option>
          <option>AC / Fridge - Installation / Maintenance</option>
          <option>Cable - Installation / Maintenance</option>
          <option>Inveter - Installation / Maintenance</option>
          <option>Roofleak - Maintenance</option>
        </select>
        @error('job_type') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
      <div class="d-grid gap-2">
        <button class="btn alt-btn" type="submit">Request Now</button>
      </div>
    </form>

    <div id="foot">
        @if (session()->has('message'))
            <div class="alert alert-mine">
                {{ session('message') }}
            </div>
        @endif
    </div>