package com.example.android.yfs;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.KeyEvent;
import android.webkit.WebSettings;
import android.webkit.WebView;
import android.webkit.WebViewClient;

public class MainActivity extends AppCompatActivity {

    private WebView main = null;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        main = (WebView) findViewById(R.id.main);
        WebSettings webSettings = main.getSettings();
        webSettings.setJavaScriptEnabled(true);
        main.setWebViewClient(new WebViewClient());
        main.loadUrl("https://www.google.com");
    }

    @Override
    public boolean onKeyDown(final int keyCode, final KeyEvent event) {
        if ((keyCode == KeyEvent.KEYCODE_BACK) && main.canGoBack()) {
            main.goBack();
            return true;
        }
        return super.onKeyDown(keyCode, event);
    }
}