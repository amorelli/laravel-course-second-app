@component('mail::message')
    # A Heading

    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat nemo, est iusto ab cum sed consectetur adipisci
    officia amet aliquid quia corrupti blanditiis nam. Eligendi rerum excepturi aliquid numquam quam.

    - A list
    - Another item
    - Another one
    @component('mail::button', ['url' => 'https//laracasts.com'])
        Visit Laracasts
    @endcomponent
@endcomponent
