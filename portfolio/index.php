<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/../gtm-head.php'; ?>
<?php include __DIR__ . '/../gtag.php'; ?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portfolio | RealDeal IT Center — Client Work &amp; Case Studies</title>
<meta name="description" content="Browse RealDeal IT Center's portfolio of bookkeeping, web design &amp; development, digital marketing and SEO projects — filter by category, technology, industry and more.">
<link rel="canonical" href="https://jahangirhussen.github.io/RealDeal_Home/portfolio/">
<meta property="og:type" content="website">
<meta property="og:title" content="Portfolio | RealDeal IT Center">
<meta property="og:description" content="Client work and case studies across bookkeeping, web design & development, digital marketing and SEO.">
<meta property="og:url" content="https://jahangirhussen.github.io/RealDeal_Home/portfolio/">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Portfolio | RealDeal IT Center">
<meta name="twitter:description" content="Client work and case studies across bookkeeping, web design & development, digital marketing and SEO.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;family=Poppins:wght@600;700;800&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
:root {
	--rd-orange: #ff4a1c; --rd-orange-2: #ff7a35; --rd-ink: #0e1a24; --rd-teal: #0f8f88;
	--rd-blue: #2764e6; --rd-green: #13a76f; --rd-soft: #f6f8fb; --rd-line: rgba(14, 26, 36, 0.12);
	--rd-muted: #63717d; --font-heading: "Poppins", sans-serif; --font-body: "Inter", sans-serif;
	--container: 1180px; --radius: 8px; --shadow: 0 22px 60px rgba(14, 26, 36, 0.12);
	--accent: var(--rd-orange);
}
*,*::before,*::after { box-sizing:border-box; margin:0; padding:0; }
html { scroll-behavior:smooth; }
body { font-family:var(--font-body); background:#fff; color:var(--rd-muted); font-size:16px; line-height:1.65; overflow-x:hidden; }
a { color:inherit; text-decoration:none; } ul { list-style:none; }
h1,h2,h3,h4 { font-family:var(--font-heading); color:var(--rd-ink); font-weight:800; line-height:1.1; }
.container { width:min(100% - 48px, var(--container)); margin:0 auto; padding:0 25px; }
.section-kicker { display:inline-flex; align-items:center; gap:10px; margin-bottom:14px; color:var(--rd-orange); font-size:12px; font-weight:800; letter-spacing:1.5px; text-transform:uppercase; }
.section-kicker::before { content:""; width:26px; height:2px; background:currentColor; }
.section-title { font-size:clamp(28px,4vw,42px); margin-bottom:16px; }
.btn { display:inline-flex; align-items:center; justify-content:center; gap:8px; min-height:44px; padding:0 18px; border-radius:6px; font-size:13.5px; font-weight:800; border:1px solid transparent; cursor:pointer; transition:transform .18s ease, box-shadow .18s ease, border-color .18s ease, color .18s ease, background .18s ease; }
.btn:hover { transform:translateY(-3px); }
.btn-primary { background:linear-gradient(135deg,var(--rd-orange),var(--rd-orange-2)); color:#fff; box-shadow:0 16px 34px rgba(255,74,28,.25); }
.btn-dark { background:var(--rd-ink); color:#fff; }
.btn-outline { background:#fff; color:var(--rd-ink); border-color:var(--rd-line); }
.btn-outline:hover { border-color:var(--rd-orange); color:var(--rd-orange); }
.btn-sm { min-height:36px; padding:0 14px; font-size:12.5px; }
.detail-section { padding:80px 0; }
.detail-section.alt { background:linear-gradient(180deg,#fff,var(--rd-soft)); }

/* Hero */
.listing-hero { padding:138px 0 56px; background:linear-gradient(135deg,rgba(14,26,36,.97),rgba(20,37,51,.92)),url("https://realdealitcenter.com/wp-content/uploads/2026/07/index-banner.webp") center/cover; color:#fff; text-align:center; }
.listing-hero .inner { max-width:760px; margin:0 auto; }
.listing-hero h1 { color:#fff; font-size:clamp(30px,4.4vw,46px); margin-bottom:16px; }
.listing-hero p { color:rgba(255,255,255,.78); font-size:16px; margin-bottom:28px; }
.search-box { position:relative; max-width:560px; margin:0 auto; }
.search-box input { width:100%; min-height:54px; padding:0 20px 0 50px; border-radius:99px; border:1px solid rgba(255,255,255,.2); background:rgba(255,255,255,.08); backdrop-filter:blur(10px); color:#fff; font:inherit; font-size:15px; outline:none; }
.search-box input::placeholder { color:rgba(255,255,255,.55); }
.search-box input:focus { border-color:var(--rd-orange); background:rgba(255,255,255,.14); }
.search-box i { position:absolute; left:20px; top:50%; transform:translateY(-50%); color:rgba(255,255,255,.6); }

/* Filters */
.filters-bar { display:flex; flex-wrap:wrap; align-items:center; gap:12px; padding:20px; margin-top:-32px; position:relative; z-index:2; border:1px solid var(--rd-line); border-radius:14px; background:#fff; box-shadow:var(--shadow); }
.filters-bar select { min-height:42px; padding:0 34px 0 14px; border:1px solid var(--rd-line); border-radius:6px; background:#fff url('data:image/svg+xml;utf8,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 20 20%22 fill=%22%2363717d%22><path d=%22M5 7l5 6 5-6z%22/></svg>') no-repeat right 10px center / 14px; appearance:none; -webkit-appearance:none; color:var(--rd-ink); font:inherit; font-size:13.5px; font-weight:700; cursor:pointer; }
.filters-bar select:focus { outline:none; border-color:var(--rd-orange); }
.filter-toggle { display:inline-flex; align-items:center; gap:8px; padding:0 14px; min-height:42px; border:1px solid var(--rd-line); border-radius:6px; font-size:13.5px; font-weight:700; color:var(--rd-ink); cursor:pointer; user-select:none; background:#fff; transition:border-color 160ms ease, color 160ms ease, background 160ms ease; }
.filter-toggle input { accent-color:var(--rd-orange); width:15px; height:15px; }
.filter-toggle.is-active,
.filter-toggle:has(input:checked) { border-color:var(--rd-orange); color:var(--rd-orange); background:rgba(255,74,28,.06); }
.filters-spacer { flex:1; }
.filters-count { font-size:13px; font-weight:700; color:var(--rd-muted); white-space:nowrap; }
.filters-reset { font-size:12.5px; font-weight:800; color:var(--rd-orange); cursor:pointer; background:none; border:0; padding:0; }

/* Grid */
.results-grid { display:grid; grid-template-columns:repeat(4,1fr); gap:22px; margin-top:36px; }
.result-card { position:relative; display:flex; flex-direction:column; border:2px solid transparent; outline:1px solid var(--rd-line); border-radius:14px; overflow:hidden; background:#fff; transition:transform 220ms ease, border-color 220ms ease, box-shadow 220ms ease; }
.result-card:hover { transform:translateY(-6px); border-color:var(--rd-orange); box-shadow:0 20px 45px rgba(255,74,28,.18); }
.card-media { position:relative; aspect-ratio:16/10; overflow:hidden; background:var(--rd-soft); }
.card-media img { width:100%; height:100%; object-fit:cover; transition:transform 500ms ease; }
.result-card:hover .card-media img { transform:scale(1.06); }
.card-badge-group { display:none; }
.card-badge { padding:5px 12px; border-radius:99px; font-size:11px; font-weight:800; text-transform:uppercase; letter-spacing:.4px; color:#fff; background:var(--card-accent, var(--rd-orange)); }
.card-featured { position:absolute; top:12px; right:12px; width:32px; height:32px; border-radius:50%; background:rgba(255,255,255,.92); color:var(--rd-orange); display:flex; align-items:center; justify-content:center; font-size:13px; z-index:2; }
.card-body { padding:20px 20px 22px; display:flex; flex-direction:column; flex:1; }
.card-meta { display:flex; align-items:center; gap:8px; font-size:12px; font-weight:700; color:var(--rd-muted); margin-bottom:8px; }
.card-body h3 { font-size:18px; margin-bottom:8px; }
.card-body > p { font-size:13.5px; margin-bottom:14px; flex:0; }
.card-tags { display:flex; flex-wrap:wrap; gap:6px; margin-bottom:16px; }
.card-tags span { padding:4px 10px; border-radius:99px; background:var(--rd-soft); border:1px solid var(--rd-line); font-size:11.5px; font-weight:700; color:var(--rd-ink); }
.card-actions { display:flex; gap:8px; margin-top:auto; }
.card-actions .btn { flex:1; }
.card-link { position:absolute; inset:0; z-index:1; }
.card-actions, .card-tags { position:relative; z-index:2; }
.no-results { grid-column:1 / -1; text-align:center; padding:60px 20px; color:var(--rd-muted); }
.no-results i { font-size:32px; color:var(--rd-line); margin-bottom:14px; display:block; }
.load-more-wrap { text-align:center; margin-top:40px; }
.results-status { font-size:13px; color:var(--rd-muted); text-align:center; margin-top:14px; }

@media(max-width:1180px) { .results-grid { grid-template-columns:repeat(3,1fr); } }
@media(max-width:960px) { .results-grid { grid-template-columns:repeat(2,1fr); } }
@media(max-width:640px) {
	.results-grid { grid-template-columns:1fr; }
	.filters-bar { margin-top:0; flex-direction:column; align-items:stretch; }
	.filters-bar select, .filter-toggle { width:100%; }
}
</style>
<link rel="stylesheet" href="../assets/site-nav.css?v=3">
</head>
<body>
<?php include __DIR__ . '/../gtm-body.php'; ?>
<?php $active_nav = 'home'; $header_mode = 'hero'; include '../header.php'; ?>


<section class="listing-hero">
	<div class="container">
		<div class="inner">
			<h1>Work we're proud of</h1>
			<p>Real projects across bookkeeping, web design &amp; development, digital marketing and SEO. Filter by category, technology or industry to find work like yours.</p>
			<div class="search-box">
				<i class="fa-solid fa-magnifying-glass"></i>
				<input type="search" id="portfolioSearch" placeholder="Search projects, clients, technologies…" aria-label="Search portfolio">
			</div>
		</div>
	</div>
</section>

<section class="detail-section" style="padding-top:0;">
	<div class="container">
		<div class="filters-bar" id="filtersBar">
			<select id="filterCategory" aria-label="Filter by category"><option value="">All Categories</option></select>
			<select id="filterTechnology" aria-label="Filter by technology"><option value="">All Technologies</option></select>
			<select id="filterIndustry" aria-label="Filter by industry"><option value="">All Industries</option></select>
			<select id="filterCountry" aria-label="Filter by country"><option value="">All Countries</option></select>
			<select id="filterYear" aria-label="Filter by year"><option value="">All Years</option></select>
			<select id="filterStatus" aria-label="Filter by status"><option value="">All Statuses</option></select>
			<label class="filter-toggle"><input type="checkbox" id="filterFeatured"> Featured only</label>
			<div class="filters-spacer"></div>
			<select id="sortBy" aria-label="Sort projects">
				<option value="latest">Sort: Latest</option>
				<option value="oldest">Sort: Oldest</option>
				<option value="featured">Sort: Featured first</option>
				<option value="az">Sort: A–Z</option>
				<option value="za">Sort: Z–A</option>
			</select>
			<button class="filters-reset" id="filtersReset" type="button">Reset filters</button>
		</div>

		<div class="results-grid" id="portfolioGrid" aria-live="polite"></div>
		<p class="results-status" id="portfolioStatus"></p>
		<div class="load-more-wrap">
			<button class="btn btn-outline" id="loadMoreBtn" type="button">Load more projects <i class="fa-solid fa-arrow-down"></i></button>
		</div>
	</div>
</section>

<?php include '../footer.php'; ?>


<script id="portfolio-schema" type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "ItemList",
	"name": "RealDeal IT Center Portfolio",
	"itemListElement": []
}
</script>
<script>
/*
 * Data-driven portfolio listing.
 * PORTFOLIO_DATA below is mock/local data shaped like a future WordPress
 * REST API response (e.g. GET /wp-json/wp/v2/portfolio). To connect a real
 * backend later: replace loadPortfolioData() with a fetch() call that
 * returns objects in this same shape — nothing else on this page needs to
 * change, since every card/filter/sort/pagination is generated from data.
 */
const PORTFOLIO_DATA = [
	{ slug:"zaam-zaam-limited-trading-supply-optimization", title:"Zaam Zaam Limited — Retail Business Growth", excerpt:"Replaced scattered spreadsheets with a structured accounting, website, marketing and SEO setup for a UK retail shop.", image:"https://realdealitcenter.com/wp-content/uploads/2026/07/zaam-zaam-limited-trading-supply-optimization-cover.webp", categories:["Accounting and Bookkeeping","Web Design & Development","Digital Marketing","SEO"], technologies:["Financial Record Keeping","Accounts Payable","Bank Reconciliation"], industry:"Retail", country:"United Kingdom", year:2023, status:"Ongoing", featured:true, client:"Zaam Zaam Limited", liveUrl:"", githubUrl:"", detailUrl:"zaam-zaam-limited-trading-supply-optimization.php" },
	{ slug:"bros-slice-grill-restaurant-digital-transformation", title:"Bros Slice & Grill — Restaurant Digital Transformation", excerpt:"Brought accounting, website, marketing and SEO together under one system for a UK restaurant.", image:"https://realdealitcenter.com/wp-content/uploads/2026/07/index-image-18.webp", categories:["Accounting and Bookkeeping","Web Design & Development","Digital Marketing","SEO"], technologies:["Financial Record Keeping","Financial Reporting","Payroll Management"], industry:"Restaurant", country:"United Kingdom", year:2025, status:"Ongoing", featured:true, client:"Bros Slice & Grill", liveUrl:"https://brossliceandgrill.co.uk/", githubUrl:"", detailUrl:"bros-slice-grill-restaurant-digital-transformation.php" },
	{ slug:"al-haayaat-limited-business-operations-transformation", title:"Al Haayaat Limited — Business Operations Transformation", excerpt:"Transformed manual accounting and disorganized operations into a fully automated business management system.", image:"https://realdealitcenter.com/wp-content/uploads/2026/07/aahm-import-trading-business-growth-al-haayaat-limited.webp", categories:["Accounting and Bookkeeping","Web Design & Development","Digital Marketing","SEO"], technologies:["Financial Record Keeping","Financial Reporting","Shopify"], industry:"Wholesale (Offline & Online)", country:"United Kingdom", year:2025, status:"Ongoing", featured:true, client:"Al Haayaat Limited", liveUrl:"https://alhaayaatltd.co.uk/", githubUrl:"", detailUrl:"al-haayaat-limited-business-operations-transformation.php" },
	{ slug:"mirandas-english-club-social-media-growth", title:"Miranda's English Club — Social Media Growth", excerpt:"Helping a Tbilisi-based language school build a consistent, engaging social media presence to attract new students.", image:"https://realdealitcenter.com/wp-content/uploads/2026/07/mirandas-english-club-social-media-growth-cover.webp", categories:["Digital Marketing","Social Media Management"], technologies:["Facebook Marketing","Instagram Marketing"], industry:"Education", country:"Georgia", year:2023, status:"Completed", featured:false, client:"Miranda's English Club", liveUrl:"", githubUrl:"", detailUrl:"mirandas-english-club-social-media-growth.php" },
	{ slug:"trb-home-decor-social-media-growth", title:"TRB Home Decor — Social Media Growth", excerpt:"Building a consistent, on-brand social media presence for TRB Home Decor to showcase products and reach new customers.", image:"https://realdealitcenter.com/wp-content/uploads/2026/07/trb-home-decor-social-media-growth-cover.webp", categories:["Digital Marketing","Social Media Management"], technologies:["Facebook Marketing","Instagram Marketing"], industry:"Home Decor / Retail", country:"Bangladesh", year:2022, status:"Completed", featured:false, client:"TRB Home Decor", liveUrl:"", githubUrl:"", detailUrl:"trb-home-decor-social-media-growth.php" },
	{ slug:"trb-fashion-social-media-growth", title:"TRB Fashion — Social Media Growth", excerpt:"Building a consistent, on-brand social media presence for TRB Fashion to showcase collections and reach new customers.", image:"https://realdealitcenter.com/wp-content/uploads/2026/07/trb-fashion-social-media-growth-cover.webp", categories:["Digital Marketing","Social Media Management"], technologies:["Facebook Marketing","Instagram Marketing"], industry:"Fashion / Retail", country:"Bangladesh", year:2021, status:"Completed", featured:false, client:"TRB Fashion", liveUrl:"", githubUrl:"", detailUrl:"trb-fashion-social-media-growth.php" },
	{ slug:"aahm-import-trading-business-growth", title:"AAHM — Import & Trading Business Growth", excerpt:"Accounting, digital marketing and SEO for a raw material import and delivery business sourcing from multiple countries.", image:"https://realdealitcenter.com/wp-content/uploads/2026/07/aahm-import-trading-business-growth-cover.webp", categories:["Accounting and Bookkeeping","Digital Marketing","SEO"], technologies:["Financial Record Keeping","Financial Reporting"], industry:"Import & Trading", country:"United Kingdom", year:2022, status:"Ongoing", featured:false, client:"AAHM", liveUrl:"", githubUrl:"", detailUrl:"aahm-import-trading-business-growth.php" }
];

function loadPortfolioData() { return Promise.resolve(PORTFOLIO_DATA); }

const CATEGORY_ACCENTS = { "Accounting and Bookkeeping":"var(--rd-teal)", "Web Design & Development":"var(--rd-orange)", "Digital Marketing":"var(--rd-blue)", "SEO":"var(--rd-green)", "Social Media Management":"var(--rd-blue)", "Graphics Design":"var(--rd-orange)" };

(function () {
	"use strict";
	const grid = document.getElementById("portfolioGrid");
	const statusEl = document.getElementById("portfolioStatus");
	const searchInput = document.getElementById("portfolioSearch");
	const catSel = document.getElementById("filterCategory");
	const techSel = document.getElementById("filterTechnology");
	const indSel = document.getElementById("filterIndustry");
	const countrySel = document.getElementById("filterCountry");
	const yearSel = document.getElementById("filterYear");
	const statusSel = document.getElementById("filterStatus");
	const featuredChk = document.getElementById("filterFeatured");
	const sortSel = document.getElementById("sortBy");
	const resetBtn = document.getElementById("filtersReset");
	const loadMoreBtn = document.getElementById("loadMoreBtn");

	const PAGE_SIZE = 16;
	let visibleCount = PAGE_SIZE;
	let allItems = [];

	function uniqueSorted(items, key) {
		return Array.from(new Set(items.map((i) => i[key]).filter(Boolean))).sort();
	}

	function uniqueSortedMulti(items, key) {
		return Array.from(new Set(items.flatMap((i) => i[key] || []))).sort();
	}

	function populateSelect(select, values) {
		values.forEach((v) => {
			const opt = document.createElement("option");
			opt.value = v;
			opt.textContent = v;
			select.appendChild(opt);
		});
	}

	function cardTemplate(item) {
		// detailUrl points at this project's dedicated case-study page. A future
		// WordPress backend would instead resolve /portfolio/{slug} to this data.
		const detailUrl = item.detailUrl || (encodeURIComponent(item.slug) + "/");
		const tags = item.technologies.map((t) => `<span>${t}</span>`).join("");
		const cats = item.categories || [];
		const badges = cats.map((c) => `<span class="card-badge">${c}</span>`).join("");
		return `
		<article class="result-card" style="--card-accent:${CATEGORY_ACCENTS[cats[0]] || "var(--rd-orange)"}">
			<a class="card-link" href="${detailUrl}" aria-label="View ${item.title}"></a>
			<div class="card-media">
				<img src="${item.image}" alt="${item.title}" loading="lazy" width="800" height="500">
				<div class="card-badge-group">${badges}</div>
				${item.featured ? '<span class="card-featured" title="Featured project"><i class="fa-solid fa-star"></i></span>' : ""}
			</div>
			<div class="card-body">
				<div class="card-meta"><span>${item.industry}</span><span>&middot;</span><span>${item.year}</span><span>&middot;</span><span>${item.status}</span></div>
				<h3>${item.title}</h3>
				<p>${item.excerpt}</p>
				<div class="card-tags">${tags}</div>
				<div class="card-actions">
					${item.liveUrl ? `<a class="btn btn-outline btn-sm" href="${item.liveUrl}" target="_blank" rel="noopener">Live Demo</a>` : ""}
					${item.githubUrl ? `<a class="btn btn-outline btn-sm" href="${item.githubUrl}" target="_blank" rel="noopener">GitHub</a>` : ""}
					<a class="btn btn-dark btn-sm" href="${detailUrl}">View Details</a>
				</div>
			</div>
		</article>`;
	}

	function getFiltered() {
		const q = searchInput.value.trim().toLowerCase();
		return allItems.filter((item) => {
			if (catSel.value && !(item.categories || []).includes(catSel.value)) return false;
			if (techSel.value && !item.technologies.includes(techSel.value)) return false;
			if (indSel.value && item.industry !== indSel.value) return false;
			if (countrySel.value && item.country !== countrySel.value) return false;
			if (yearSel.value && String(item.year) !== yearSel.value) return false;
			if (statusSel.value && item.status !== statusSel.value) return false;
			if (featuredChk.checked && !item.featured) return false;
			if (q) {
				const hay = (item.title + " " + item.excerpt + " " + item.client + " " + item.technologies.join(" ")).toLowerCase();
				if (!hay.includes(q)) return false;
			}
			return true;
		});
	}

	function getSorted(items) {
		const sorted = items.slice();
		switch (sortSel.value) {
			case "oldest": sorted.sort((a, b) => a.year - b.year); break;
			case "featured": sorted.sort((a, b) => (b.featured === a.featured) ? 0 : (b.featured ? 1 : -1)); break;
			case "az": sorted.sort((a, b) => a.title.localeCompare(b.title)); break;
			case "za": sorted.sort((a, b) => b.title.localeCompare(a.title)); break;
			default: sorted.sort((a, b) => b.year - a.year);
		}
		return sorted;
	}

	function render() {
		const filtered = getSorted(getFiltered());
		const slice = filtered.slice(0, visibleCount);
		grid.innerHTML = slice.length
			? slice.map(cardTemplate).join("")
			: '<div class="no-results"><i class="fa-solid fa-folder-open"></i>No projects match these filters.</div>';
		statusEl.textContent = filtered.length ? `Showing ${slice.length} of ${filtered.length} projects` : "";
		loadMoreBtn.style.display = visibleCount < filtered.length ? "inline-flex" : "none";
	}

	function resetPaging() { visibleCount = PAGE_SIZE; render(); }

	[catSel, techSel, indSel, countrySel, yearSel, statusSel, sortSel].forEach((el) => el.addEventListener("change", resetPaging));
	featuredChk.addEventListener("change", resetPaging);
	searchInput.addEventListener("input", resetPaging);
	loadMoreBtn.addEventListener("click", () => { visibleCount += PAGE_SIZE; render(); });
	resetBtn.addEventListener("click", () => {
		[catSel, techSel, indSel, countrySel, yearSel, statusSel].forEach((el) => el.value = "");
		featuredChk.checked = false;
		searchInput.value = "";
		sortSel.value = "latest";
		resetPaging();
	});

	loadPortfolioData().then((items) => {
		allItems = items;
		populateSelect(catSel, uniqueSortedMulti(items, "categories"));
		populateSelect(techSel, Array.from(new Set(items.flatMap((i) => i.technologies))).sort());
		populateSelect(indSel, uniqueSorted(items, "industry"));
		populateSelect(countrySel, uniqueSorted(items, "country"));
		populateSelect(yearSel, uniqueSorted(items, "year").sort((a, b) => b - a));
		populateSelect(statusSel, uniqueSorted(items, "status"));

		const schema = {
			"@context": "https://schema.org",
			"@type": "ItemList",
			"name": "RealDeal IT Center Portfolio",
			"itemListElement": items.map((item, idx) => ({
				"@type": "ListItem",
				"position": idx + 1,
				"item": {
					"@type": "CreativeWork",
					"name": item.title,
					"description": item.excerpt,
					"image": item.image,
					"url": "https://jahangirhussen.github.io/RealDeal_Home/portfolio/" + (item.detailUrl || (item.slug + "/"))
				}
			}))
		};
		document.getElementById("portfolio-schema").textContent = JSON.stringify(schema);

		render();
	});
})();
</script>
<script src="../assets/site-nav.js?v=3" defer></script>
</body>
</html>
