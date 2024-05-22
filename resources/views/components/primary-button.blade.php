<button {{ $attributes->merge(['type' => 'submit', 'class' => 'button_login text-uppercase fw-bold']) }}>
    {{ $slot }}
</button>
