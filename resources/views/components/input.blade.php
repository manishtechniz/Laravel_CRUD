<label for="email" class="font-bold text-gray-700">{{$label}}</label>
<div>
   <input class="pl-1 rounded-md border-solid border-gray-400 border focus:outline focus:outline-blue-500 w-full h-11 mt-2 mb-2"
        type="{{$type}}" id="email" name="{{$name}}" value="{{old($name)}}">
    @error($name)
        <p class="text-red-500 pb-3 font-bold">{{ $message }}</p>
    @enderror
   
</div>