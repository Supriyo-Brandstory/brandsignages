<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;
use Illuminate\Support\Facades\Route;

class MenuSeeder extends Seeder
{
    public function run()
    {
        Menu::truncate();

        // Top Level Menus
        $aboutUs = Menu::create(['title' => 'About Us', 'url' => 'about-us', 'order' => 1, 'menu_type' => 'standard']);
        $services = Menu::create(['title' => 'Services', 'url' => 'sign-board', 'order' => 2, 'menu_type' => 'standard']);
        $signages = Menu::create(['title' => 'Signages', 'url' => 'javascript:void(0)', 'order' => 3, 'menu_type' => 'mega-parent', 'target_id' => 'signagesDropdown']);
        $locations = Menu::create(['title' => 'Our Locations', 'url' => 'javascript:void(0)', 'order' => 4, 'menu_type' => 'mega-parent', 'target_id' => 'locationDropdown']);
        $caseStudies = Menu::create(['title' => 'Case Studies', 'url' => 'case-studies', 'order' => 5, 'menu_type' => 'standard']);
        $blog = Menu::create(['title' => 'Blog', 'url' => 'blogs', 'order' => 6, 'menu_type' => 'standard']);
        $contactUs = Menu::create(['title' => 'Contact Us', 'url' => 'contact-us', 'order' => 7, 'menu_type' => 'standard']);

        // Signages Mega Menu Categories (Left Column)
        $signageType = Menu::create([
            'parent_id' => $signages->id,
            'title' => 'Signages by Type',
            'url' => 'javascript:void(0)',
            'tag' => 'SIGNAGE CATEGORY',
            'description' => 'Browse by material, glow effect, and physical build.',
            'target_id' => 'spec-type',
            'order' => 1,
            'menu_type' => 'mega-category'
        ]);

        $signageIndustry = Menu::create([
            'parent_id' => $signages->id,
            'title' => 'Signages by Industry',
            'url' => 'javascript:void(0)',
            'tag' => 'SIGNAGE CATEGORY',
            'description' => 'Specialized branding for health, retail, and corporate.',
            'target_id' => 'spec-industry',
            'order' => 2,
            'menu_type' => 'mega-category'
        ]);

        $signageUse = Menu::create([
            'parent_id' => $signages->id,
            'title' => 'Signage by Use Type',
            'url' => 'javascript:void(0)',
            'tag' => 'SIGNAGE CATEGORY',
            'description' => 'Functional signs for safety, rooms, and directions.',
            'target_id' => 'spec-use',
            'order' => 3,
            'menu_type' => 'mega-category'
        ]);

        // Signages by Type Items (Right Multi-pane)
        $typeItems = [
            [
                'title' => 'Acrylic Signage',
                'url' => 'arcylic-signages',
                'icon' => 'fas fa-layer-group',
                'description' => 'Versatile and glossy signs for modern branding.',
                'sub_items' => [
                    ['title' => 'LED Acrylic Glow Sign', 'url' => 'led-acrylic-3d-glow-sign-board'],
                    ['title' => '3D LED Acrylic Letters', 'url' => '3d-led-acrylic-letters'],
                    ['title' => 'Non-Lit 3D Acrylic Letters', 'url' => '3d-acrylic-letter-non-lit'],
                    ['title' => '3D ACP Letter Acrylic', 'url' => '3d-acp-letter-acrylic'],
                    ['title' => '2D Stencil Cut Letters', 'url' => '2d-stencil-cut-acrylic-led-letters'],
                ]
            ],
            ['title' => 'Metal Signages', 'url' => 'metal-signages', 'icon' => 'fas fa-shield-alt', 'description' => 'Premium steel and aluminum signage solutions.'],
            ['title' => 'Digital Signage', 'url' => 'digital-signages', 'icon' => 'fas fa-tv', 'description' => 'High-tech interactive LED and LCD displays.'],
            ['title' => 'Outdoor Signages', 'url' => 'outdoor-signages', 'icon' => 'fas fa-external-link-alt', 'description' => 'Weather-resistant branding for shop exteriors.'],
            ['title' => 'Acrylic Letters', 'url' => 'acrylic-letters', 'icon' => 'fas fa-font', 'description' => 'Custom 3D acrylic lettering and logos.'],
            ['title' => 'Neon Glow Sign', 'url' => 'neon-signages', 'icon' => 'fas fa-bolt', 'description' => 'Trendy and vibrant neon lighting signs.'],
            ['title' => 'LED Sign Board', 'url' => 'led-light-signages', 'icon' => 'fas fa-lightbulb', 'description' => 'Energy-efficient illuminated branding.'],
        ];

        foreach ($typeItems as $index => $item) {
            $parent = Menu::create([
                'parent_id' => $signageType->id,
                'title' => $item['title'],
                'url' => $item['url'],
                'icon' => $item['icon'],
                'description' => $item['description'],
                'order' => $index + 1,
                'menu_type' => 'mega-item'
            ]);

            if (isset($item['sub_items'])) {
                foreach ($item['sub_items'] as $subIndex => $subItem) {
                    Menu::create([
                        'parent_id' => $parent->id,
                        'title' => $subItem['title'],
                        'url' => $subItem['url'],
                        'order' => $subIndex + 1,
                        'menu_type' => 'mega-sub-item'
                    ]);
                }
            }
        }

        // Signages by Industry Items
        $industryItems = [
            ['title' => 'Healthcare Sign', 'url' => 'hospital-signages', 'icon' => 'fas fa-heartbeat', 'description' => 'Clear and calming signage for hospitals.'],
            ['title' => 'Hotels and Restaurants Sign', 'url' => 'restaurant-signages', 'icon' => 'fas fa-hotel', 'description' => 'Elegant signs for hospitality and dining.'],
            ['title' => 'Construction Safety Sign', 'url' => 'construction-safety-signages', 'icon' => 'fas fa-hard-hat', 'description' => 'High-visibility safety signs for worksites.'],
            ['title' => 'Office Signage', 'url' => 'office-signages', 'icon' => 'fas fa-briefcase', 'description' => 'Professional branding and room signs.'],
            ['title' => 'Office Name Board', 'url' => 'name-board-design-for-office-bangalore', 'icon' => 'fas fa-id-badge', 'description' => 'Custom entrance and desk name boards.'],
            ['title' => 'Shop Name Boards', 'url' => 'name-board-designs-for-shops-bangalore', 'icon' => 'fas fa-store', 'description' => 'Creative and bold fascia signs for shops.'],
            ['title' => 'Interior Signages', 'url' => 'indoor-signages', 'icon' => 'fas fa-couch', 'description' => 'Atmospheric indoor branding and wall art.'],
        ];

        foreach ($industryItems as $index => $item) {
            Menu::create([
                'parent_id' => $signageIndustry->id,
                'title' => $item['title'],
                'url' => $item['url'],
                'icon' => $item['icon'],
                'description' => $item['description'],
                'order' => $index + 1,
                'menu_type' => 'mega-item'
            ]);
        }

        // Signage by Use Type Items
        $useItems = [
            ['title' => 'Fire Safety Sign', 'url' => 'fire-safety-signages', 'icon' => 'fas fa-fire-extinguisher', 'description' => 'Essential hazard and exit indicators.'],
            ['title' => 'Door Signs', 'url' => 'door-signages', 'icon' => 'fas fa-door-open', 'description' => 'Stylish signs for cabin and room doors.'],
            ['title' => 'House Number Signs', 'url' => 'house-number-signages', 'icon' => 'fas fa-home', 'description' => 'Elegant number plates for residences.'],
            ['title' => 'Custom Nameplates', 'url' => 'nameplate-signages', 'icon' => 'fas fa-signature', 'description' => 'Personalized brass, wood, and acrylic plates.'],
            ['title' => 'Restroom Signs', 'url' => 'restroom-signages', 'icon' => 'fas fa-restroom', 'description' => 'Clear gender and accessible facility signs.'],
            ['title' => 'Prohibitory Signs', 'url' => 'prohibitory-signages', 'icon' => 'fas fa-ban', 'description' => 'No smoking, no entry, and warning signs.'],
            ['title' => 'Room Number Sign', 'url' => 'modern-room-number-signs', 'icon' => 'fas fa-hashtag', 'description' => 'Sequential numbering for hotels and offices.'],
        ];

        foreach ($useItems as $index => $item) {
            Menu::create([
                'parent_id' => $signageUse->id,
                'title' => $item['title'],
                'url' => $item['url'],
                'icon' => $item['icon'],
                'description' => $item['description'],
                'order' => $index + 1,
                'menu_type' => 'mega-item'
            ]);
        }

        // Locations Mega Menu Categories
        $locBangalore = Menu::create([
            'parent_id' => $locations->id,
            'title' => 'Bangalore',
            'url' => 'javascript:void(0)',
            'tag' => 'KARNATAKA',
            'description' => 'Premium signage manufacturing hub.',
            'target_id' => 'loc-bangalore',
            'order' => 1,
            'menu_type' => 'mega-category'
        ]);

        $locMumbai = Menu::create([
            'parent_id' => $locations->id,
            'title' => 'Mumbai',
            'url' => 'javascript:void(0)',
            'tag' => 'MAHARASHTRA',
            'description' => 'Branding for the financial capital.',
            'target_id' => 'loc-mumbai',
            'order' => 2,
            'menu_type' => 'mega-category'
        ]);

        $locChennai = Menu::create([
            'parent_id' => $locations->id,
            'title' => 'Chennai',
            'url' => 'javascript:void(0)',
            'tag' => 'TAMIL NADU',
            'description' => 'Expert signage solutions in the south.',
            'target_id' => 'loc-chennai',
            'order' => 3,
            'menu_type' => 'mega-category'
        ]);

        // Bangalore localized services
        $bangaloreLinks = [
            ['title' => 'Signages in Bangalore', 'url' => '/'],
            ['title' => 'Acrylic Signages', 'url' => 'acrylic-signage-manufacturer-bangalore'],
            ['title' => 'Steel Signs', 'url' => 'steel-signage-manufacturer-bangalore'],
            ['title' => 'Digital Signage', 'url' => 'digital-signage-company-bangalore'],
            ['title' => 'Neon Signs', 'url' => 'neon-sign-board-bangalore'],
            ['title' => 'LED Sign Boards', 'url' => 'led-sign-board-in-bangalore'],
            ['title' => 'Hospital Signages', 'url' => 'hospital-signages-in-bangalore'],
            ['title' => 'Safety Signages', 'url' => 'safety-signages-in-bangalore'],
            ['title' => 'Name Plate Signs', 'url' => 'name-plate-signages-in-bangalore'],
            ['title' => 'Restroom Signs', 'url' => 'restroom-signs-in-bangalore'],
            ['title' => 'Office Desk Signs', 'url' => 'office-desk-signs-in-bangalore'],
        ];

        foreach ($bangaloreLinks as $index => $link) {
            Menu::create([
                'parent_id' => $locBangalore->id,
                'title' => $link['title'],
                'url' => $link['url'],
                'order' => $index + 1,
                'menu_type' => 'mega-item'
            ]);
        }

        // Mumbai localized services
        $mumbaiLinks = [
            ['title' => 'Signages in Mumbai', 'url' => 'leading-signage-company-in-mumbai'],
            ['title' => 'Acrylic Signages', 'url' => 'premium-acrylic-sign-boards-in-mumbai'],
            ['title' => 'Digital Signages', 'url' => 'digital-signages-manufacturer-in-mumbai'],
            ['title' => 'LED Display Boards', 'url' => 'led-display-board-in-mumbai'],
            ['title' => 'Neon Signs', 'url' => 'neon-sign-board-in-mumbai'],
            ['title' => 'Hospital & Medical', 'url' => 'hospital-and-medical-signages-in-mumbai'],
            ['title' => 'Fire Safety', 'url' => 'construction-fire-safety-signages-in-mumbai'],
            ['title' => 'SS Sign Boards', 'url' => 'stainless-steel-sign-board-manufacturer-mumbai'],
            ['title' => 'Name Plates', 'url' => 'name-plate-signs-manufacturer-mumbai'],
            ['title' => 'Office Signages', 'url' => 'office-signages-in-mumbai'],
            ['title' => 'Restroom Signs', 'url' => 'restroom-signs-in-mumbai'],
        ];

        foreach ($mumbaiLinks as $index => $link) {
            Menu::create([
                'parent_id' => $locMumbai->id,
                'title' => $link['title'],
                'url' => $link['url'],
                'order' => $index + 1,
                'menu_type' => 'mega-item'
            ]);
        }

        // Chennai localized services
        $chennaiLinks = [
            ['title' => 'Signages in Chennai', 'url' => 'signage-in-chennai'],
            ['title' => 'Acrylic Signages', 'url' => 'acrylic-signages-in-chennai'],
            ['title' => 'Metal Signages', 'url' => 'metal-and-stainless-steel-sign-boards-in-chennai'],
            ['title' => 'Digital Signages', 'url' => 'leading-digital-signage-in-chennai'],
            ['title' => 'Neon Signs', 'url' => 'custom-neon-sign-boards-in-chennai'],
            ['title' => 'LED Display Boards', 'url' => 'led-display-board-in-chennai'],
            ['title' => 'Hospital & Medical', 'url' => 'hospital-medical-signages-chennai'],
            ['title' => 'Safety Signages', 'url' => 'high-quality-safety-signages-in-chennai'],
            ['title' => 'Restroom Signs', 'url' => 'high-quality-restroom-signs-in-chennai'],
        ];

        foreach ($chennaiLinks as $index => $link) {
            Menu::create([
                'parent_id' => $locChennai->id,
                'title' => $link['title'],
                'url' => $link['url'],
                'order' => $index + 1,
                'menu_type' => 'mega-item'
            ]);
        }
    }
}
