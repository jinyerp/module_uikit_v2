<thead class="bg-gray-50">
    <tr>
        <th scope="col"
            class="w-10 min-w-0 max-w-[40px] py-3.5 pr-3 pl-4 text-left text-sm font-semibold text-gray-900 sm:pl-3">
            <div class="group grid size-4 grid-cols-1">
                <input id="candidates-all" aria-describedby="candidates-description" name="candidates-all" type="checkbox"
                    class="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto" />
                <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25"
                    viewBox="0 0 14 14" fill="none">
                    <path class="opacity-0 group-has-checked:opacity-100" d="M3 8L6 11L11 3.5" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path class="opacity-0 group-has-indeterminate:opacity-100" d="M3 7H11" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </th>

        {{ $slot }}
    </tr>
</thead>
