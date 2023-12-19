

<div class="container mx-auto my-8">
    <h1 class="text-2xl font-bold mb-4 text-center">Rate Project</h1>
    
    <form method="post" action="" class="max-w-md mx-auto">
        @csrf
        <div class="mb-4">
            <label for="rating" class="block text-gray-700">Rating (1-10):</label>
            <input
                    type="range"
                    name="rating"
                    min="1"
                    max="10"
                    class="w-full"
                    value="{{ old('rating') }}"
                    oninput="ratingValue.value = this.value"
                />
                <output id="ratingValue" class="text-center mt-2 font-bold text-xl">{{ old('rating') ?? 1 }}</output>
            <div class="flex justify-between mt-2">
                <span>1</span>
                <span>10</span>
            </div>
        </div>
        
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Submit Rating</button>
    </form>
</div>