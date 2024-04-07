<div class="col-sm-10">
       <select
        wire:model="select"
        wire:change="change()"
        class="form-select"
            >
            @foreach ($companies as $companie)
                <option value="{{ $companie['id'] }}"
                    data-select2-id="{{ $companie['id'] }}"
                    >
                    {{ $companie['company_name'] }}</option>
            @endforeach
        </select>
</div>
