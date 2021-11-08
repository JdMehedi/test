<div>
    <label class="block" for="name">Create Table</label>
    <input type="text" name="name" >
    <p class="text-red-600">{{$errors->first('c_name')}}</p>
</div>
<div class="py-2">
    <button class="px-4 py-2 bg-green-700" type="submit">{{ $buttonText }}</button>
</div>
