<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <div>
        @foreach($jobs as $job) <!-- Use $jobs instead of $jobss -->
        <li>
            <a href="/jobs/{{$job['id']}}">
                <div class="font-bold">{{$job->employer->name}}</div> <!-- Access employer relationship -->
                <strong>{{$job['title']}}</strong>: Pays {{$job['salary']}} per year
            </a>
        </li>
        @endforeach

        <div>
            {{ $jobs->links() }} <!-- Pagination links for jobs -->
        </div>
    </div>
</x-layout>
