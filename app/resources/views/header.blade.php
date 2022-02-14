<div id ="app">
<example-component></example-component>
</div>
<div id="header" class="bg-gray-400">
<header class="container mx-auto text-white">
    <div class="flex justify-between items-center">
        <div class="text-4xl font-semibold">Farm Review Site
        </div>
        <div class="md:hidden">
            <button @click="isOpen = !isOpen" class="focus:outline-none">
                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                    <path v-show="!isOpen" d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z"/>
                    <path v-show="isOpen" d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"/>                </svg>
            </button>
        </div>
    </div>
    <div :class="isOpen ? 'block' : 'hidden'" class="fixed w-full left-0 bg-gray-400 md:block md:static">
        <ul class="md:flex md:justify-center md:items-center">
            <li class="border-b">
                <div class="my-4">
                    <a href="{{ url('/farm/list') }}" class="block px-8 py-2 hover:bg-gray-600 rounded">ファーム</a>
                </div>
            </li>
            <li class="border-b">
                <div class="my-4">
                    <a href="{{ url('/review/list') }}" class="block px-8 py-2 hover:bg-gray-600 rounded">レビュー</a>
                </div>
            </li>
            <li class="border-b">
                <div class="my-4">
                    <a href="{{ url('/tip/list') }}" class="block px-8 py-2 hover:bg-gray-600 rounded">Tip</a>
                </div>
            </li>
            <li class="border-b">
                <div class="my-4">
                    <a href="{{ url('/content/list') }}" class="block px-8 py-2 hover:bg-gray-600 rounded">コンテンツ</a>
                </div>
            </li>
        </ul>
    </div>
</header>
</div>