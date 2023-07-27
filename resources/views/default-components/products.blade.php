<table class="table-rounded mb">
    <colgroup>
        <col style="width: 33.33%; padding: 4px;">
        <col style="width: 33.33%; padding: 4px;">
        <col style="width: 33.33%; padding: 4px;">
    </colgroup>
    <thead>
        <tr>
            <th class="rounded-t-l bg-primary text-primary-contrast border-l border-primary">
                {{ __('Concepto') }}
            </th>
            <th class="bg-primary text-primary-contrast">
                {{ __('Concepto') }}
            </th>
            <th class="rounded-t-r bg-primary text-primary-contrast border-r border-primary">
                {{ __('Concepto') }}
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            @php
                $leftClasses = 'border-l border-primary';
                $centerClasses = '';
                $rightClasses = 'border-r border-primary';

                if ($loop->last) {
                    $leftClasses .= ' border-b rounded-b-l';
                    $centerClasses .= ' border-primary border-b';
                    $rightClasses .= ' border-b rounded-b-r';
                }
            @endphp
            <tr>
                <td class="{{ $leftClasses }}">1</td>
                <td class="{{ $centerClasses }}">2</td>
                <td class="{{ $rightClasses }}">3</td>
            </tr>
        @endforeach
    </tbody>
</table>
