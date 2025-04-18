@extends('layouts.app')

@section('title', 'Contact - Ser-Rapide')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <div>
                <h1 class="text-4xl font-bold mb-6">Contactez-nous</h1>
                <p class="text-gray-600 mb-8">
                    Nous sommes là pour répondre à toutes vos questions. Remplissez le formulaire ci-dessous et nous vous répondrons dans les plus brefs délais.
                </p>

                <div class="space-y-6">
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Nos adresses</h3>
                        <p>
                            <li class="text-gray-600">101, Rue Daniel Casanova,<br>93200 Saint Denis France</li>
                        </p>
                        <p>
                            <li class="text-gray-600">M16, Av Colonel Ebeya,<br>C. Gombe / Kinshasa R.D Congo</li>
                        </p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Téléphones</h3>
                        <li class="text-gray-600">+33 774 453 128</li>
                        <li class="text-gray-600">+243 983 032 501</li>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Email</h3>
                        <p class="text-gray-600">contact@serrapide.com</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-8">
                <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Nom complet</label>
                        <input type="text" name="name" id="name" required
                               class="px-5 py-2 mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email" required
                               class="px-5 py-2 mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700">Sujet</label>
                        <input type="text" name="subject" id="subject" required
                               class="px-5 py-2 mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                        <textarea name="message" id="message" rows="4" required
                                  class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
                    </div>

                    <button type="submit"
                            class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                        Envoyer le message
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
