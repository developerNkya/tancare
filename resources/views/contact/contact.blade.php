@extends('layouts.app')

@section('title', 'Contact Us - TanCare')

@section('content')
<div class="py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h1 class="text-4xl font-bold tracking-tight text-foreground sm:text-5xl">Contact Us</h1>
            <p class="mt-6 text-lg leading-8 text-muted-foreground">
                Get in touch with TanCare for certification inquiries, support, or partnership opportunities.
            </p>
        </div>
        <div class="mx-auto mt-16 grid max-w-6xl grid-cols-1 gap-8 lg:grid-cols-3">
            <div class="lg:col-span-2">
                <div class="rounded-lg border border-border bg-card p-6 shadow-sm">
                    <div class="mb-6">
                        <h2 class="text-2xl font-semibold text-foreground">Send us a message</h2>
                        <p class="mt-2 text-muted-foreground">
                            Fill out the form below and we'll get back to you as soon as possible.
                        </p>
                    </div>
                    <form method="POST" action="{{ route('contact.submit') }}" class="space-y-6">
                        @csrf
                        <div class="grid gap-6 sm:grid-cols-2">
                            <div class="space-y-2">
                                <label for="name" class="text-sm font-medium">
                                    Full Name *
                                </label>
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    value="{{ old('name') }}"
                                    required
                                    placeholder="John Doe"
                                    class="w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2"
                                />
                                @error('name')
                                    <p class="text-sm text-destructive">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="space-y-2">
                                <label for="email" class="text-sm font-medium">
                                    Email Address *
                                </label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    placeholder="john@example.com"
                                    class="w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2"
                                />
                                @error('email')
                                    <p class="text-sm text-destructive">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label for="organization" class="text-sm font-medium">
                                Organization
                            </label>
                            <input
                                type="text"
                                id="organization"
                                name="organization"
                                value="{{ old('organization') }}"
                                placeholder="Your healthcare facility or organization"
                                class="w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2"
                            />
                            @error('organization')
                                <p class="text-sm text-destructive">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="space-y-2">
                            <label for="subject" class="text-sm font-medium">
                                Subject *
                            </label>
                            <input
                                type="text"
                                id="subject"
                                name="subject"
                                value="{{ old('subject') }}"
                                required
                                placeholder="What is this regarding?"
                                class="w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2"
                            />
                            @error('subject')
                                <p class="text-sm text-destructive">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="space-y-2">
                            <label for="message" class="text-sm font-medium">
                                Message *
                            </label>
                            <textarea
                                id="message"
                                name="message"
                                required
                                rows="6"
                                placeholder="Tell us more about your inquiry..."
                                class="w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2"
                            >{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-sm text-destructive">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="inline-flex items-center justify-center rounded-md bg-primary px-6 py-3 text-sm font-medium text-primary-foreground shadow transition-colors hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 w-full sm:w-auto">
                            <svg class="mr-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                            </svg>
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
            <div class="space-y-6">
                <div class="rounded-lg border border-border bg-card p-6 shadow-sm">
                    <h2 class="text-2xl font-semibold text-foreground mb-6">Contact Information</h2>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary/10">
                                <svg class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-medium">Email</p>
                                <p class="mt-1 text-sm text-muted-foreground">info@tancare.go.tz</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary/10">
                                <svg class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-medium">Phone</p>
                                <p class="mt-1 text-sm text-muted-foreground">+255 XX XXX XXXX</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary/10">
                                <svg class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-medium">Address</p>
                                <p class="mt-1 text-sm text-muted-foreground">
                                    Ministry of Health Building
                                    <br />
                                    Dar es Salaam, Tanzania
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded-lg border border-border bg-card p-6 shadow-sm">
                    <h2 class="text-2xl font-semibold text-foreground mb-6">Office Hours</h2>
                    <div class="space-y-2 text-sm">
                        <div class="flex justify-between">
                            <span class="text-muted-foreground">Monday - Friday</span>
                            <span class="font-medium">8:00 AM - 5:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-muted-foreground">Saturday</span>
                            <span class="font-medium">9:00 AM - 1:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-muted-foreground">Sunday</span>
                            <span class="font-medium">Closed</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if(session('success'))
    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)" 
         class="fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg">
        {{ session('success') }}
    </div>
@endif
@endsection