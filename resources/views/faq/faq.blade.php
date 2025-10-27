@extends('layouts.app')

@section('title', 'Frequently Asked Questions - TanCare')

@section('content')
<div class="py-24 sm:py-32">
    <div class="mx-auto max-w-4xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h1 class="text-4xl font-bold tracking-tight text-foreground sm:text-5xl">
                Frequently Asked Questions
            </h1>
            <p class="mt-6 text-lg leading-8 text-muted-foreground">
                Find answers to common questions about TanCare certification, assessment processes, and how to get
                involved.
            </p>
        </div>
        <div class="mt-16">
            @php
                $faqs = [
                    [
                        'question' => 'What is TanCare certification?',
                        'answer' => 'TanCare certification is a nationally recognized healthcare quality certification program in Tanzania, endorsed by the Ministry of Health and PHAB. It provides a systematic approach to assessing and improving healthcare quality in facilities across the country.',
                    ],
                    [
                        'question' => 'Who can apply for TanCare certification?',
                        'answer' => 'Any healthcare facility in Tanzania can apply for TanCare certification, including hospitals, clinics, health centers, and specialized medical facilities. The certification process is designed to accommodate facilities of all sizes and types.',
                    ],
                    [
                        'question' => 'How long does the certification process take?',
                        'answer' => 'The certification timeline varies depending on the facility size and current quality standards. Typically, the process takes 6-12 months from initial assessment to certification, including preparation, on-site evaluation, and any necessary improvements.',
                    ],
                    [
                        'question' => 'What are the benefits of TanCare certification?',
                        'answer' => 'TanCare certification demonstrates your commitment to quality healthcare, enhances patient trust, provides systematic quality improvement frameworks, offers access to quality advisors, and is recognized nationally by the Ministry of Health.',
                    ],
                    [
                        'question' => 'How do I become a TanCare assessor?',
                        'answer' => 'To become a TanCare assessor, you must have relevant healthcare experience, complete our comprehensive training program, pass the certification examination, and maintain ongoing professional development. Contact us for detailed requirements and application procedures.',
                    ],
                    [
                        'question' => 'What is the role of a quality advisor?',
                        'answer' => 'Quality advisors support healthcare facilities throughout their certification journey, providing guidance on quality improvement initiatives, helping identify gaps, and offering strategies for meeting certification standards.',
                    ],
                    [
                        'question' => 'Is TanCare certification recognized internationally?',
                        'answer' => 'TanCare certification is aligned with international healthcare quality standards through partnerships with PHAB, SafeCare, and other global organizations. While primarily recognized in Tanzania, it demonstrates adherence to internationally accepted quality principles.',
                    ],
                    [
                        'question' => 'How much does certification cost?',
                        'answer' => 'Certification costs vary based on facility size, type, and specific needs. We offer tiered pricing to ensure accessibility for facilities of all sizes. Contact us for a detailed quote tailored to your facility.',
                    ],
                    [
                        'question' => 'What happens after certification?',
                        'answer' => 'Certification is typically valid for three years. During this period, facilities receive ongoing support, participate in continuous quality improvement activities, and undergo periodic monitoring to maintain standards. Recertification is required at the end of the cycle.',
                    ],
                    [
                        'question' => 'How can I access the TanCare mobile app?',
                        'answer' => 'The TanCare mobile app is available for download on iOS and Android devices. You can download it from the App Store or Google Play, or scan the QR code on our website to access certification resources, track progress, and manage assessments.',
                    ],
                ];
            @endphp

            <div class="space-y-4">
                @foreach($faqs as $index => $faq)
                    <div class="border border-border rounded-lg px-6 py-4 group">
                        <input type="checkbox" id="faq-{{ $index }}" class="hidden peer">
                        <label for="faq-{{ $index }}" class="flex w-full items-center justify-between text-left cursor-pointer">
                            <span class="font-semibold text-foreground">{{ $faq['question'] }}</span>
                            <svg class="h-5 w-5 text-muted-foreground transition-transform duration-200 peer-checked:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </label>
                        <div class="mt-4 text-muted-foreground max-h-0 overflow-hidden transition-all duration-300 peer-checked:max-h-96 peer-checked:mt-4">
                            {{ $faq['answer'] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection