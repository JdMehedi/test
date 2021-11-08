<div>
    <label class="block" for="name">Start date</label>
    <input type="date" name="start_date"/>

</div>
<div>
    <label class="block" for="name">End date</label>
    <input type="date" name="end_date"/>

</div>
<div>
    <label class="block" for="name">Start time</label>
    <input type="time" name="start_time"/>

</div>

<div>
    <label class="block" for="name">End time</label>
    <input type="time" name="end_time"/>

</div>

<input type="hidden" name="table_id" value="{{$table_id}}">
<div class="py-2">
    <button class="px-4 py-2 bg-green-700" type="submit">{{ $buttonText }}</button>
</div>
