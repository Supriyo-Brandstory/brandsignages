<?php

namespace App\Console\Commands;

use App\Services\SitemapService;
use Illuminate\Console\Command;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Auto-generate and sync all blog posts and custom pages in the sitemap';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Scanning and synchronizing sitemap...');
        $count = SitemapService::syncAll();
        $this->info("Sitemap successfully updated! {$count} URLs were added or synced.");

        return Command::SUCCESS;
    }
}
