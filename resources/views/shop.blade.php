<div style="
    max-width: 400px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #E1E3E5;
    border-radius: 8px;
    background-color: #FFFFFF;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    font-family: Arial, sans-serif;
">
    <h3 style="font-size: 18px; color: #212B36; margin: 0 0 12px; font-weight: 600;">
        Shop Information
    </h3>
    <p style="font-size: 14px; color: #212B36; margin: 8px 0;">
        <strong style="color: #5C6AC4;">Shop Name:</strong>
        <span>{{ $shopDomain ?? Auth::user()->name }}</span>
    </p>
    <p style="font-size: 14px; color: #212B36; margin: 8px 0;">
        <strong style="color: #5C6AC4;">Shop ID:</strong>
        <span>{{ $shopDomain ?? Auth::user()->id }}</span>
    </p>
</div>
