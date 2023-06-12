<button  {{ $attributes->merge(['type' => 'submit', 'class' => 'py-[15px] border border-white rounded-[56px] font-bold text-15px leading-[22px] text-white hover:text-white-3 transition ease-in-out duration-500']) }}>
    <span>{{ $slot }}</span>
</button>
