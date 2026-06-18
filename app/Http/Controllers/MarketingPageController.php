<?php
namespace App\Http\Controllers;
use App\Models\MarketingPage;
use Inertia\Inertia;
class MarketingPageController { public function show(string $slug = 'home') { $page = MarketingPage::where('slug',$slug)->firstOrFail(); return Inertia::render('MarketingPage',['page'=>$page,'pages'=>MarketingPage::select('slug','title')->get()]); } }
