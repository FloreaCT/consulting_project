@auth
    @php
        $controlString = auth()->user()->controlstring;
        $controlString = strlen($controlString) > 18 ? substr($controlString, 1, 2) : '';
        
        $isPersonalStarter = $controlString === '00' && $plan.' '.$type === 'Personal Starter Personal';
        $isPersonalBasic = $controlString === '01' && $plan.' '.$type === 'Personal Basic Personal';
        $isPersonalPremium = $controlString === '02' && $plan.' '.$type === 'Personal Premium Personal';
        $isTopUpPersonal = $controlString === '03' && $plan.' '.$type === 'Top-up Personal';
        $isBusinessStarter = $controlString === '10' && $plan.' '.$type === 'Business Starter Business';
        $isBusinessBasic = $controlString === '11' && $plan.' '.$type === 'Business Basic Business';
        $isBusinessPremium = $controlString === '12' && $plan.' '.$type === 'Business Premium Business';
        $isTopUpBusiness = $controlString === '13' && $plan.' '.$type === 'Top-up Business';
    @endphp

    @if($isPersonalStarter || $isPersonalBasic || $isPersonalPremium || $isTopUpPersonal || $isBusinessStarter || $isBusinessBasic || $isBusinessPremium || $isTopUpBusiness)
        <button class="bg-[--c5] p-2 rounded text-white font-bold" href="/#" disabled="true">Already Subscribed</button>
    @else
        <form method="POST" action="/portal/plans">
            @csrf
            <button class="bg-[--c2] p-2 rounded text-white font-bold" type="submit">Subscribe</button>
        </form>
    @endif
@else
    <button class="bg-[--c2] p-2 rounded text-white font-bold" onclick="window.location.href = '/login'">Subscribe</button>
@endif