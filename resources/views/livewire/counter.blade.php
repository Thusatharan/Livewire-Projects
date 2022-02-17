<div style="text-align: center;">
    <h1>Counter</h1>

    <div style=" display: flex; justify-content: center; align-items: center;">
       <button class="bg-secondary rounded-circle" wire:click="decrease" style="padding: 20px; margin:20px;"><i class="fa fa-minus"></i></button>
        <h1>{{ $count }}</h1>
        <button class="bg-success rounded-circle" wire:click="increment" style="padding: 20px;  margin:20px;"><i class="fa fa-plus"></i></button>
    </div>
</div>
