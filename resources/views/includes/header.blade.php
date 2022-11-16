<form action="" method="POST">
    @csrf
    <div class="flex flex-row p-5">
        <div class="w-6/12">
            <input type="text" name="address" id="search-box" autocomplete="off" class="w-full p-1 bg-gray-200 rounded-md" placeholder="ابحث عن عنوان">
            <div id="suggesstion-box"></div>
        </div>
        <div class="w-6/12">
            <select name="category" id="" class="w-full p-1 mr-5 bg-gray-200 rounded-md">
                <option value="">حدد التصنيف</option>
            </select>
        </div>
        <div class="mr-5">
            <button type="submit" class="p-1 px-5 mr-5 text-white bg-gray-500 rounded-md hover:bg-gray-400">بحث</button>
        </div>
    </div>
</form>
<section class="m-auto text-center ">
    <div class="mt-5 ">
        <ul >
            @foreach($categories as $category)
            <li class="inline-block text-base border-reduce ">
                <a href="{{ route('category.show' , $category->slug) }}" class="inline-block p-2 m-1 text-white transition bg-blue-900 rounded-md cursor-pointer hover:bg-gray-400 ">{{ $category->name }}</a>
            </li>
            @endforeach
        </ul>
    </div>

</section>
