@extends('frontend.app')
@section('content')
<div class="container py-4">
    <h1>History</h1><br>
    <div class="row">
        <div class="col-md-8">
            <p>History.
                The Nepal National Library was established by His Majesty’s Government in January 1957 (Poush 2013 BS). The core collection was the personal library of Rajguru Hem Raj Pandey, spiritual advisor to the King, which had been purchased for the nation in 1956. The collection was moved to SikriDhoka, a building within the complex of Singha Durbar, a Rana Palace modeled on Versailles, and said to be the largest in Asia at the time. Singha Durbar was also the home of the Central Secretariat Library, with which the Nepal National Library was merged. At that time, the total collection numbered 34,292 books and periodicals.</p>
        </div>
        <div class="col-md-4">
            <img src="data:image/jpeg;base64,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" alt="">
        </div>
    </div>
    <br>

        <p> The post of “Chairman” of the library was created at its establishment, and the first postholder was Mr GangadharParajuli. Two assistant Pundits, one Bahidur, and four Ardalis were also appointed. It was not until 1985 that a professional was appointed as Chief Librarian.</p>

    <p>The Nepal National Library was moved to its present location, the Rana palace called HariharBhawan, Pulchowk, Lalitpur, in1961 (2017), where it occupies the southern wing on the first floor of the building. In the early sixties the National Library produced an impressive series of publications, making ancient handwritten texts available in printed form. Lending services were started in 1961, and continued for some years. However, full classification and cataloguing of the stock had never been carried out, and in the early eighties it was decided to suspend lending facilities in order to embark on the mammoth task of cataloguing the entire stock. A full card catalogue for the Nepali, English, and Hindi collections was finally completed in 1988. Since that time the holdings have been made available to all for reading and reference, but in the interest of preservation, circulation services have not been</p>
</div>
@endsection