@extends('dashboard.layouts.layout')

@section('content')
    <header class="bg-white shadow">
        <div class="container mx-auto py-6 px-4">
            <h1 class="text-3xl font-bold text-center">About Us</h1>
        </div>
    </header>

    <main class="container mb-6 mx-auto py-12 px-6">
        <section class="mb-10">
            <h2 class="text-2xl font-semibold mb-4">Our Story</h2>
            <p class="text-lg leading-relaxed">
                Founded in 2024, our company began with a simple idea: to make life easier through innovative solutions. Since then, we have grown into a team of passionate professionals dedicated to making a positive impact in the world. With a strong commitment to innovation and sustainability, we continuously strive to create meaningful change and enrich people's lives. We take pride in our journey so far and are excited about the future, where we can continue to contribute to global progress and well-being.
            </p>
        </section>

        <section class="mb-10">
            <h2 class="text-2xl font-semibold mt-4 mb-7">Our Team</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow p-6 text-center">
                    <img class="w-24 h-24 rounded-full mx-auto mb-4" src="../assets/claudio.jpg" alt="Claudio">
                    <h3 class="text-xl font-semibold mb-2">Louis Claudio</h3>
                    <p class="text-gray-600">231402068</p>
                </div>
                <div class="bg-white rounded-lg shadow p-6 text-center">
                    <img class="w-24 h-24 rounded-full mx-auto mb-4" src="../assets/perry.jpg" alt="Perry">
                    <h3 class="text-xl font-semibold mb-2">Perry Saputra Halim</h3>
                    <p class="text-gray-600">231402087</p>
                </div>
                <div class="bg-white rounded-lg shadow p-6 text-center">
                    <img class="w-24 h-24 rounded-full mx-auto mb-4" src="../assets/izu.jpg" alt="Izu">
                    <h3 class="text-xl font-semibold mb-2">IzuKhairi Misrawi Rohali</h3>
                    <p class="text-gray-600">231402112</p>
                </div>
                <div class="bg-white rounded-lg shadow p-6 text-center">
                    <img class="w-24 h-24 rounded-full mx-auto mb-4" src="../assets/hilmiy.jpg" alt="Hilmiy">
                    <h3 class="text-xl font-semibold mb-2">Muhammad Hilmiy Arifqi</h3>
                    <p class="text-gray-600">231402102</p>
                </div>
                <div class="bg-white rounded-lg shadow p-6 text-center">
                    <img class="w-24 h-24 rounded-full mx-auto mb-4" src="../assets/fadhil.jpg" alt="fadhil">
                    <h3 class="text-xl font-semibold mb-2">Fadhil Al Harits Lubis</h3>
                    <p class="text-gray-600">231402116</p>
                </div>
                <div class="bg-white rounded-lg shadow p-6 text-center">
                    <img class="w-24 h-24 rounded-full mx-auto mb-4" src="../assets/bayu.jpg" alt="bayu">
                    <h3 class="text-xl font-semibold mb-2">Nur bayu</h3>
                    <p class="text-gray-600">231402105</p>
                </div>
            </div>
        </section>

        <section class="mb-4">
            <h2 class="text-2xl font-semibold mb-4">Our Mission</h2>
            <p class="text-lg leading-relaxed mb-4">
                Our mission is to offer services that ensure better management of your finances, so you no longer have to worry about where your money has gone. We understand that keeping track of your spending and saving can be challenging and stressful. That's why we're here to simplify the process for you. With our comprehensive financial management tools, you can gain clear insights into your financial situation, helping you make informed decisions and achieve your financial goals with ease.

            </p>
            <p class="text-lg leading-relaxed mb-4">
                We are dedicated to providing a seamless and efficient experience with our user-friendly web platform. Our web platform is designed with you in mind, prioritizing ease of use and accessibility. Unlike other financial management tools that can be confusing and time-consuming, our web platform allows you to manage your money effortlessly. Whether you're tracking expenses, setting budgets, or planning for the future, our platform makes these tasks straightforward and hassle-free.

            </p>
            <p class="text-lg leading-relaxed mb-4">
                Time is one of your most valuable assets, and we want to help you make the most of it. Instead of spending valuable time navigating complicated and cumbersome websites, choose us to save your precious time. Our intuitive design and powerful features mean you can accomplish more in less time, giving you the freedom to focus on what truly matters to you. From managing day-to-day expenses to long-term financial planning, our web platform is your trusted partner in financial management.

            </p>
            <p class="text-lg leading-relaxed mb-4">
                With our web platform, you can trust that your financial matters are handled with ease and efficiency. Our commitment to excellence ensures that you have the best tools at your disposal to keep track of your finances. By choosing our services, you are opting for peace of mind and the assurance that your financial health is in good hands. Let us take the worry out of financial management so you can enjoy a more secure and stress-free financial future.
            </p>
        </section>
    </main>
@endsection
