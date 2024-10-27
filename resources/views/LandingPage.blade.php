<x-layout>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #FDECE4;
        }

        .title {
            font-family: 'Fredoka One', cursive;
            font-size: 3rem;
            color: #3A1A1A;
        }

        .subtitle {
            font-family: 'Fredoka One', cursive;
            font-size: 1.5rem;
            color: #3A1A1A;
        }

        .description {
            font-size: 1rem;
            color: #3A1A1A;
        }
    </style>
    <main class="text-center p-6">
        <section class="" id="Hero">
            <div class="text-center mt-14">
                <h1 class="title">
                    Nutribite: Smart Snacks for Every Moment
                </h1>
            </div>
            <div class="flex justify-center mt-8 relative">
                <div class="w-1/3 flex flex-col items-center">
                    <img src="{{ asset('assets/image/Snacks.jpg') }}" alt="Person holding a snack"
                        class="rounded-full mb-4 aspect-square w-40 h-40" />
                    <p class="description text-center">
                        Choosing the right snack can fuel your body and mind, helping you stay energized and focused
                        throughout the day. Learn how smart snacking supports a balanced lifestyle.
                    </p>
                    {{-- <i class="fas fa-arrow-right text-2xl mt-4"></i> --}}
                </div>
                <div class="w-1/4 flex justify-center items-center rotate-12">
                    <img src="{{ asset('assets/image/Lays.png') }}" alt="Nutribite Snack Package"
                        class="relative z-10" />
                </div>
                <div class="w-1/3 flex flex-col items-center">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('assets/image/Fitbars.jpg') }}" alt="Snack Types"
                            class="rounded-full aspect-square w-40 h-40" />
                        {{-- <i class="fas fa-arrow-right text-2xl ml-4"></i> --}}
                    </div>
                    <p class="subtitle text-center">
                        Discover Diverse Flavors
                    </p>
                    <p class="description text-center">
                        Explore a variety of snacks, each crafted to provide essential nutrients and fit seamlessly into
                        your daily routine.
                    </p>
                </div>
            </div>
        </section>
        <section class="mt-8" id="about">
            <div class="text-center">
                <h2 class="title">
                    About Nutribite
                </h2>
            </div>
            <div class="flex justify-center mt-8">
                <div class="w-1/3 flex
                    flex-col items-center">
                    <img src="{{ asset('assets/image/HealthySnacks.jpg') }}" alt="Healthy Snacks"
                        class="rounded-full mb-4 aspect-square w-40 h-40" />
                    <p class="subtitle text-center">
                        Healthy Snacks
                    </p>
                    <p class="description text-center">
                        Our snacks are made from high-quality ingredients, ensuring that you get the nutrients you need
                        without compromising on taste.
                    </p>
                </div>
                <div class="w-1/3 flex
                    flex-col items-center">
                    <img src="{{ asset('assets/image/LocalIngredients.jpg') }}" alt="Local Ingredients"
                        class="rounded-full mb-4 aspect-square w-40 h-40" />
                    <p class="subtitle text-center">
                        Local Ingredients
                    </p>
                    <p class="description text-center">
                        We source our ingredients from local farmers, supporting the community and ensuring that our
                        snacks are fresh and sustainable.
                    </p>
                </div>
                <div class="w-1/3 flex
                    flex-col items-center">
                    <img src="{{ asset('assets/image/NoPreservatives.jpg') }}" alt="No Preservatives"
                        class="rounded-full mb-4 aspect-square w-40 h-40" />
                    <p class="subtitle text-center">
                        No Preservatives
                    </p>
                    <p class="description text-center">
                        Our snacks are free from artificial preservatives, additives, and colors, making them a healthy
                        choice for you and your family.
                    </p>
                </div>
            </div>
        </section>
    </main>
</x-layout>
