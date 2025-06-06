<html>
    <head>
        <head>
    <title>Register | FinDeck</title>
    <link rel="icon" type="image/png" href="/favicon.png">
</head>
    </head>
<body>
    <div style="min-height:100vh;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,#e0e7ff 0%,#fff 50%,#fbc2eb 100%);">
        <div style="background:#fff;max-width:400px;width:100%;border-radius:18px;box-shadow:0 8px 32px rgba(44,62,80,0.18);padding:32px 28px;">
            <div style="text-align:center;margin-bottom:24px;">
                <div style="background:#6366f1;width:56px;height:56px;display:inline-flex;align-items:center;justify-content:center;border-radius:50%;margin-bottom:8px;">
                    <svg width="32" height="32" fill="none" stroke="#fff" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 21v-2a4 4 0 00-8 0v2M12 11a4 4 0 100-8 4 4 0 000 8z"/>
                    </svg>
                </div>
                <h2 style="margin:0;font-size:2rem;font-weight:700;color:#3730a3;">Register</h2>
                <p style="color:#6b7280;font-size:1rem;margin-top:4px;">Create your account to get started</p>
            </div>
            <form method="POST" action="{{ route('register') }}" autocomplete="off" id="registerForm">
    @csrf

    <!-- Name -->
    <div style="margin-bottom:18px;position:relative;">
        <input type="text" name="name" id="name" value="{{ old('name') }}" required
            placeholder="Full Name"
            style="width:100%;padding:14px 12px 14px 12px;border:1.5px solid #c7d2fe;border-radius:7px;font-size:1rem;outline:none;background:transparent;"
        />
        <x-input-error :messages="$errors->get('name')" style="color:#dc2626;font-size:0.95rem;margin-top:2px;" />
    </div>

    <!-- Email -->
    <div style="margin-bottom:18px;position:relative;">
        <input type="email" name="email" id="email" value="{{ old('email') }}" required
            placeholder="Email"
            style="width:100%;padding:14px 12px 14px 12px;border:1.5px solid #c7d2fe;border-radius:7px;font-size:1rem;outline:none;background:transparent;"
        />
        <x-input-error :messages="$errors->get('email')" style="color:#dc2626;font-size:0.95rem;margin-top:2px;" />
    </div>

    <!-- Password -->
    <div style="margin-bottom:18px;position:relative;">
        <input type="password" name="password" id="password" required
            placeholder="Password"
            style="width:100%;padding:14px 38px 14px 12px;border:1.5px solid #c7d2fe;border-radius:7px;font-size:1rem;outline:none;background:transparent;"
        />
        <button type="button" onclick="togglePass('password', this)" style="position:absolute;right:10px;top:12px;background:none;border:none;cursor:pointer;">
            <span id="eye-password" style="font-size:1.1rem;color:#6366f1;">👁️</span>
        </button>
        <x-input-error :messages="$errors->get('password')" style="color:#dc2626;font-size:0.95rem;margin-top:2px;" />
    </div>

    <!-- Confirm Password -->
    <div style="margin-bottom:18px;position:relative;">
        <input type="password" name="password_confirmation" id="password_confirmation" required
            placeholder="Confirm Password"
            style="width:100%;padding:14px 38px 14px 12px;border:1.5px solid #c7d2fe;border-radius:7px;font-size:1rem;outline:none;background:transparent;"
        />
        <button type="button" onclick="togglePass('password_confirmation', this)" style="position:absolute;right:10px;top:12px;background:none;border:none;cursor:pointer;">
            <span id="eye-password_confirmation" style="font-size:1.1rem;color:#6366f1;">👁️</span>
        </button>
        <x-input-error :messages="$errors->get('password_confirmation')" style="color:#dc2626;font-size:0.95rem;margin-top:2px;" />
    </div>

    <div style="display:flex;justify-content:space-between;align-items:center;margin-top:18px;">
        <a href="{{ route('login') }}" style="color:#6366f1;font-size:1rem;text-decoration:underline;">Already have an account?</a>
        <button type="submit"
            style="background:#6366f1;color:#fff;padding:10px 28px;border:none;border-radius:7px;font-size:1.1rem;font-weight:600;box-shadow:0 2px 8px rgba(99,102,241,0.12);cursor:pointer;transition:background 0.2s;">
            Register
        </button>
    </div>
</form>
        </div>
    </div>
    <script>
        // Floating label on page load if value exists
        document.querySelectorAll('input').forEach(function(input){
            if(input.value){
                let label = input.previousElementSibling;
                if(label && label.tagName === 'LABEL'){
                    label.style.top='2px';
                    label.style.fontSize='0.85rem';
                    label.style.color='#6366f1';
                }
            }
        });
        // Show/hide password
        function togglePass(id, btn){
            var input = document.getElementById(id);
            if(input.type === "password"){
                input.type = "text";
                btn.querySelector('span').textContent = "🙈";
            } else {
                input.type = "password";
                btn.querySelector('span').textContent = "👁️";
            }
        }
    </script>

</body>
</html>