<x-layout>
    <br><br><br><br><br>
<section id="announcementCards">
        <p class="h1 text-center">
            Tutti gli annunci
        </p>
        @foreach ($announcements as $announcement)
            <li>{{ $announcement}}</li>
        @endforeach
</section>
</x-layout>