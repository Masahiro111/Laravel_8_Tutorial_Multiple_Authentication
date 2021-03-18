<div>
    <nav class="bg-gray-900 px-3 py-2 flex items-center">
        <div class="" x-show="!show">
            <button class="block h-8 mr-3 item-center">
                <svg class="text-gray-400 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 7H18V9H6V7Z" fill="black" />
                    <path d="M6 11H18V13H6V11Z" fill="black" />
                    <path d="M18 15H6V17H18V15Z" fill="black" />
                </svg>
            </button>
        </div>
        <div class="h-12 w-full flex items-center">
            <a href="{{ url('/') }}" class="w-full">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="block h-6 w-auto">
                    <path
                        d="M11.395 44.428C4.557 40.198 0 32.632 0 24 0 10.745 10.745 0 24 0a23.891 23.891 0 0113.997 4.502c-.2 17.907-11.097 33.245-26.602 39.926z"
                        fill="#6875F5"></path>
                    <path
                        d="M14.134 45.885A23.914 23.914 0 0024 48c13.255 0 24-10.745 24-24 0-3.516-.756-6.856-2.115-9.866-4.659 15.143-16.608 27.092-31.75 31.751z"
                        fill="#6875F5"></path>
                </svg>
            </a>
        </div>
        <div class="flex justify-end">
            <ul class="text-gray-200 text-xs">
                <a href="">
                    <li class="">Login</li>
                </a>
            </ul>
        </div>
    </nav>
    <div>
        <aside>

        </aside>
    </div>
    <main>
        <section>
            <h1>{{ $title }}</h1>
            <article>
                {!! $content !!}
            </article>
        </section>
    </main>
</div>