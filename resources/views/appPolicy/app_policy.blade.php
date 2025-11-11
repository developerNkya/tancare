@extends('layouts.app')

@section('title', 'TanCare App Privacy Policy')

@section('content')
<div class="min-h-screen">
    <main class="mx-auto max-w-4xl px-6 py-16 lg:px-8 lg:py-24">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold tracking-tight text-foreground sm:text-5xl mb-4 text-balance">
                TanCare App Privacy Policy
            </h1>
            <p class="text-lg text-muted-foreground">
                Last updated: {{ now()->format('F j, Y') }}
            </p>
        </div>

        <div class="prose prose-lg max-w-none">
            <section class="mb-12">
                <div class="flex items-center gap-3 mb-4">
                    <div class="rounded-lg bg-primary/10 p-3">
                        <svg class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-foreground m-0">Introduction</h2>
                </div>
                <p class="text-muted-foreground leading-relaxed">
                    We as Tancare are committed to protecting the privacy and security of our users' personal
                    information. This Privacy Policy explains how we collect, use, disclose, and safeguard your information
                    when you use the TanCare mobile application. By using the TanCare app, you agree to the collection and use
                    of information in accordance with this policy.
                </p>
            </section>

            <section class="mb-12">
                <div class="flex items-center gap-3 mb-4">
                    <div class="rounded-lg bg-primary/10 p-3">
                        <svg class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-foreground m-0">Information We Collect</h2>
                </div>
                <div class="space-y-6">
                    <div>
                        <h3 class="text-xl font-semibold text-foreground mb-2">Personal Information</h3>
                        <p class="text-muted-foreground leading-relaxed">
                            We may collect personal identification information including but not limited to:
                        </p>
                        <ul class="list-disc pl-6 text-muted-foreground space-y-1">
                            <li>Name and contact information (email address, phone number)</li>
                            <li>Professional credentials and certifications</li>
                            <li>Health facility information and role</li>
                            <li>Assessment and certification records</li>
                            <li>Quality improvement documentation</li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold text-foreground mb-2">Usage Data</h3>
                        <p class="text-muted-foreground leading-relaxed">
                            We automatically collect certain information when you use the app, including:
                        </p>
                        <ul class="list-disc pl-6 text-muted-foreground space-y-1">
                            <li>Device information (type, operating system, unique device identifiers)</li>
                            <li>Log information (IP address, app features accessed, date and time of access)</li>
                            <li>Performance data and crash reports</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="mb-12">
                <div class="flex items-center gap-3 mb-4">
                    <div class="rounded-lg bg-primary/10 p-3">
                        <svg class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-foreground m-0">How We Use Your Information</h2>
                </div>
                <p class="text-muted-foreground leading-relaxed mb-3">
                    We use the collected information for the following purposes:
                </p>
                <ul class="list-disc pl-6 text-muted-foreground space-y-2">
                    <li>To provide and maintain the TanCare certification services</li>
                    <li>To facilitate communication between health facilities, assessors, and quality advisors</li>
                    <li>To process and track certification applications and assessments</li>
                    <li>To improve app functionality and user experience</li>
                    <li>To comply with legal obligations and regulatory requirements</li>
                    <li>To send important updates about certification status and policy changes</li>
                    <li>To ensure security and prevent fraud or unauthorized access</li>
                </ul>
            </section>

            <section class="mb-12">
                <div class="flex items-center gap-3 mb-4">
                    <div class="rounded-lg bg-primary/10 p-3">
                        <svg class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-foreground m-0">Data Security</h2>
                </div>
                <p class="text-muted-foreground leading-relaxed">
                    We implement appropriate technical and organizational security measures to protect your personal
                    information against unauthorized access, alteration, disclosure, or destruction. These measures include:
                </p>
                <ul class="list-disc pl-6 text-muted-foreground space-y-1">
                    <li>Encryption of data in transit and at rest</li>
                    <li>Regular security assessments and updates</li>
                    <li>Access controls and authentication protocols</li>
                    <li>Secure backup and disaster recovery procedures</li>
                </ul>
                <p class="text-muted-foreground leading-relaxed mt-3">
                    However, no method of transmission over the internet or electronic storage is 100% secure. While we strive
                    to use commercially acceptable means to protect your information, we cannot guarantee its absolute
                    security.
                </p>
            </section>

            <section class="mb-12">
                <div class="flex items-center gap-3 mb-4">
                    <div class="rounded-lg bg-primary/10 p-3">
                        <svg class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-foreground m-0">Data Sharing and Disclosure</h2>
                </div>
                <p class="text-muted-foreground leading-relaxed mb-3">We may share your information with:</p>
                <ul class="list-disc pl-6 text-muted-foreground space-y-2">
                    <li>
                        <strong>Ministry of Health (MoH):</strong> For regulatory compliance and national health data reporting
                    </li>
                    <li>
                        <strong>PHAB and SafeCare:</strong> Our certification partners for accreditation purposes
                    </li>
                    <li>
                        <strong>Authorized Assessors:</strong> Certified professionals conducting facility evaluations
                    </li>
                    <li>
                        <strong>Quality Advisors:</strong> Professionals providing guidance to health facilities
                    </li>
                    <li>
                        <strong>Legal Authorities:</strong> When required by law or to protect rights and safety
                    </li>
                </ul>
                <p class="text-muted-foreground leading-relaxed mt-3">
                    We do not sell, trade, or rent your personal information to third parties for marketing purposes.
                </p>
            </section>

            <section class="mb-12">
                <div class="flex items-center gap-3 mb-4">
                    <div class="rounded-lg bg-primary/10 p-3">
                        <svg class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-foreground m-0">Your Rights</h2>
                </div>
                <p class="text-muted-foreground leading-relaxed mb-3">You have the right to:</p>
                <ul class="list-disc pl-6 text-muted-foreground space-y-1">
                    <li>Access and review your personal information</li>
                    <li>Request correction of inaccurate or incomplete data</li>
                    <li>Request deletion of your data (subject to legal retention requirements)</li>
                    <li>Opt-out of non-essential communications</li>
                    <li>Withdraw consent where processing is based on consent</li>
                </ul>
                <p class="text-muted-foreground leading-relaxed mt-3">
                    To exercise these rights, please contact us at info@tancare.tz
                </p>
            </section>

            <section class="mb-12">
                <h2 class="text-2xl font-bold text-foreground mb-4">Data Retention</h2>
                <p class="text-muted-foreground leading-relaxed">
                    We retain your personal information for as long as necessary to fulfill the purposes outlined in this
                    Privacy Policy, unless a longer retention period is required or permitted by law. Certification records
                    are maintained in accordance with Tanzania Ministry of Health regulations.
                </p>
            </section>

            <section class="mb-12">
                <h2 class="text-2xl font-bold text-foreground mb-4">Children's Privacy</h2>
                <p class="text-muted-foreground leading-relaxed">
                    The TanCare app is not intended for use by individuals under the age of 18. We do not knowingly collect
                    personal information from children. If you become aware that a child has provided us with personal
                    information, please contact us immediately.
                </p>
            </section>

            <section class="mb-12">
                <h2 class="text-2xl font-bold text-foreground mb-4">Changes to This Policy</h2>
                <p class="text-muted-foreground leading-relaxed">
                    We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new
                    Privacy Policy on this page and updating the "Last updated" date. You are advised to review this Privacy
                    Policy periodically for any changes. Changes are effective when posted.
                </p>
            </section>

            <section class="mb-12">
                <h2 class="text-2xl font-bold text-foreground mb-4">Contact Us</h2>
                <p class="text-muted-foreground leading-relaxed mb-3">
                    If you have any questions about this Privacy Policy or our data practices, please contact us:
                </p>
                <div class="bg-muted rounded-lg p-6 space-y-2">
                    <p class="text-foreground">
                        <strong>TanCare Certification Program</strong>
                    </p>
                    <p class="text-muted-foreground">Email: info@tancare.tz</p>
                    <p class="text-muted-foreground">Phone: +255 XX XXX XXXX</p>
                    <p class="text-muted-foreground">Address: Dar es Salaam, Tanzania</p>
                </div>
            </section>

            <section>
                <h2 class="text-2xl font-bold text-foreground mb-4">Compliance</h2>
                <p class="text-muted-foreground leading-relaxed">
                    This Privacy Policy complies with the Tanzania Data Protection Act and international best practices for
                    healthcare data protection. TanCare is committed to maintaining the highest standards of data privacy and
                    security in alignment with our certification standards.
                </p>
            </section>
        </div>
    </main>
</div>
@endsection