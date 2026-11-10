<h2>New Contact Form Message</h2>

<p><strong>Name:</strong> {{ $contactData['first_name'] }} {{ $contactData['last_name'] }}</p>

<p><strong>Email:</strong> {{ $contactData['email'] }}</p>

<p><strong>Phone:</strong> {{ $contactData['phone'] ?? 'Not provided' }}</p>

<p><strong>Message:</strong></p>
<p>{{ $contactData['message'] }}</p>