<?php
// Template Name: Home Page

get_header();

$hero_sec = get_field('hero_section');
$program_details = get_field('program_details');
?>

<article>
    <section class="flex md:flex-row flex-col">
        <div class="flex-1">
            <figure class="h-full w-full">
                <?php echo wp_get_attachment_image(526, 'large', false, [
                    'loading' => 'lazy',
                    'class' => 'image-cover',
                ]); ?>
                <figcaption><?php echo wp_get_attachment_caption(
                                526,
                            ); ?></figcaption>
            </figure>
        </div>
        <div class="flex-1 md:p-10 p-5 bg-light-gray">
            <h2>Get Your Brochure</h2>
            <?php echo do_shortcode("[wpforms id='534']"); ?>
        </div>
    </section>
    <section class="section">
        <div>
            <h2>Program Overview</h2>
            <p>Michigan Ross Executive Education collaborates with XED to build the CXO Leadership Program which is meticulously crafted to empower C-suite executives with the essential skills, insights, and strategies needed to excel in their leadership roles.</p>

            <p>Designed as a modular structure, the 6 months program offers a comprehensive curriculum that delves into three core themes—Leadership, Innovation, and Execution. Through 100% live interactive sessions, expert guidance from faculty leaders, and peer collaboration, participants will embark on a transformative journey to elevate their leadership prowess and drive organizational success.</p>

            <p>Gain access to a prestigious network of industry leaders, ongoing professional development opportunities, and exclusive alumni benefits. Upon completion, participants will receive a certificate from Michigan Ross Executive Education.</p>

        </div>
    </section>
    <section class="section bg-background text-white">
        <div class="flex flex-wrap md:gap-10 md:justify-between gap-5">
            <div class="lg:basis-auto sm:basis-1/3 basis-full">
                <h3 class="text-third md:mb-3 mb-0">Start Date</h3>
                <p class="mb-0 md:text-3xl text-xl font-semibold">22 Jan 2025</p>
            </div>
            <div class="lg:basis-auto sm:basis-1/3 basis-full">
                <h3 class="text-third md:mb-3 mb-0">Format</h3>
                <p class="mb-0 md:text-3xl text-xl font-semibold">100% Live Interactive</p>
            </div>
            <div class="lg:basis-auto sm:basis-1/3 basis-full">
                <h3 class="text-third md:mb-3 mb-0">Duration</h3>
                <p class="mb-0 md:text-3xl text-xl font-semibold">6 Months</p>
            </div>
            <div class="lg:basis-auto sm:basis-1/3 basis-full">
                <h3 class="text-third md:mb-3 mb-0">Program Fee</h3>
                <p class="mb-0 md:text-3xl text-xl font-semibold">USD 4,800</p>
            </div>
            <div class="basis-full">
                <p class="text-xs text-gray-300 mb-0">
                    Disclaimer: Please note that in the event of a global or regional catastrophe, or any unforeseen circumstances, the Program's schedule, delivery method, faculty, and associated elements are subject to change at the sole discretion of the university.
                </p>
            </div>
        </div>
    </section>
    <section class="section">
        <div>
            <h2>Program Alumni Benefits:</h2>
            <p>After the completion of the CXO Leadership Program you will be a part of a cohort of global leaders and practitioners.</p>

            <h3>You also receive the benefits listed below*</h3>
            <ul>
                <li>Inclusion in the Michigan Ross Executive Education Network</li>
                <li>Access to the Kresge Library Services on the Michigan Ross campus</li>
                <li>Access and invitations to the exclusive Michigan Ross Executive Education sponsored events, conferences, and seminars</li>
                <li>Receive a Continuing Education Unit letter</li>
                <li>Earn 2 credit towards the Distinguished Leader Executive Certificate</li>
            </ul>

            <p>*All benefits are subject to change based on University's discretion.</p>
        </div>
    </section>
    <section class="section bg-light-gray">
        <h2>Michigan Ross Advantage</h2>
        <div class="flex md:flex-row flex-col justify-between md:gap-20 gap-5">
            <div class="flex-1">
                <p>
                    At Michigan Ross, we are leaders, researchers, and lifelong learners creating innovative solutions to the world’s most complex business challenges. Our mission is to build a better world through business. We are committed to unlock the potential of business by developing powerful ideas, purpose-driven leaders, and a community dedicated to making a positive impact.
                </p>
                <p>
                    Our impact extends far beyond the classroom as we aim to set a new standard in business and business education, and empower business leaders to make a positive difference in the world. Our core values serve as guiding principles for how we lead and represent our commitment to excellence.
                </p>

                <div class="flex-1">
                    <ul class="text-2xl list-none pl-0 flex gap-2 flex-wrap font-medium">
                        <li class="flex items-center gap-3 border py-2 px-3 bg-white md:basis-auto basis-full">
                            <figure class="md:w-[40px] w-[30px]"><img class="image-contain" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/1.png" alt=""></figure>
                            Connect and Collaborate
                        </li>
                        <li class="flex items-center gap-3 border py-2 px-3 bg-white md:basis-auto basis-full">
                            <figure class="md:w-[40px] w-[30px]"><img class="image-contain" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/2.png" alt=""></figure>
                            Learn and Grow
                        </li>
                        <li class="flex items-center gap-3 border py-2 px-3 bg-white md:basis-auto basis-full">
                            <figure class="md:w-[40px] w-[30px]"><img class="image-contain" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/5.png" alt=""></figure>
                            Be Inclusive
                        </li>
                        <li class="flex items-center gap-3 border py-2 px-3 bg-white md:basis-auto basis-full">
                            <figure class="md:w-[40px] w-[30px]"><img class="image-contain" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/3.png" alt=""></figure>
                            Be an Owner
                        </li>
                        <li class="flex items-center gap-3 border py-2 px-3 bg-white md:basis-auto basis-full">
                            <figure class="md:w-[40px] w-[30px]"><img class="image-contain" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/4.png" alt=""></figure>
                            Do Great Things
                        </li>
                    </ul>
                </div>
            </div>
            <div class="shrink-0 flex md:gap-10 gap-5">
                <div class="flex-1">
                    <h3>Rankings</h3>
                    <div class="w-fit space-y-3 text-white">
                        <div class="flex bg-primary md:gap-5 gap-3 p-3">
                            <p style="font-family: Atkinson Hyperlegible;" class="text-third text-3xl font-bold mb-0">#1</p>
                            <p class="mb-0">
                                <span class="font-medium">Public University in the Nation</span> <br>
                                <span class="text-sm">(QS World University Rankings, 2022)</span>
                            </p>
                        </div>
                        <div class="flex bg-primary md:gap-5 gap-3 p-3">
                            <p style="font-family: Atkinson Hyperlegible;" class="text-third text-3xl font-bold mb-0">#1</p>
                            <p class="mb-0">
                                <span class="font-medium">Executive Education Program in North America</span> <br>
                                <span class="text-sm">(Financial Times, 2022)</span>
                            </p>
                        </div>
                        <div class="flex bg-primary md:gap-5 gap-3 p-3">
                            <p style="font-family: Atkinson Hyperlegible;" class="text-third text-3xl font-bold mb-0">#1</p>
                            <p class="mb-0">
                                <span class="font-medium">Full-Time MBA Program</span> <br>
                                <span class="text-sm"> (Economist, 2022)</span>
                            </p>
                        </div>
                        <div class="flex bg-primary md:gap-5 gap-3 p-3">
                            <p style="font-family: Atkinson Hyperlegible;" class="text-third text-3xl font-bold mb-0">#1</p>
                            <p class="mb-0">
                                <span class="font-medium">Overall Satisfaction for Custom Programs</span> <br>
                                <span class="text-sm">(Financial Times, 2022)</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div>
            <h2>Program Highlights</h2>
            <br>
            <ul class="flex pl-0 md:gap-10 gap-5 flex-wrap list-none text-center">
                <li class="space-y-5 md:basis-1/4 sm:basis-1/3 basis-full flex-1">
                    <figure class="w-28 mx-auto aspect-square">
                        <img class="image-contain" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/benefits-4.png" alt="">
                        <figcaption class="sr-only">Image</figcaption>
                    </figure>
                    <div>
                        <h4>Live Interactive Sessions</h4>
                        <p>Engage in real-time discussions, case studies, and simulations that are not pre-recorded sessions</p>
                    </div>
                </li>
                <li class="space-y-5 md:basis-1/4 sm:basis-1/3 basis-full flex-1">
                    <figure class="w-28 mx-auto aspect-square">
                        <img class="image-contain" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/benefits-1.png" alt="">
                        <figcaption class="sr-only">Image</figcaption>
                    </figure>
                    <div>
                        <h4>Learn from Michigan Ross Faculty</h4>
                        <p>
                            Gain insights from esteemed professors renowned for their expertise in leadership, innovation, and execution
                        </p>
                    </div>
                </li>
                <li class="space-y-5 md:basis-1/4 sm:basis-1/3 basis-full flex-1">
                    <figure class="w-28 mx-auto aspect-square">
                        <img class="image-contain" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/benefits-2.png" alt="">
                        <figcaption class="sr-only">Image</figcaption>
                    </figure>
                    <div>
                        <h4>Program Alumni Benefits</h4>
                        <p>Empower yourself with exclusive benefits designed to elevate your leadership Journey</p>
                    </div>
                </li>
                <li class="space-y-5 md:basis-1/4 sm:basis-1/3 basis-full flex-1">
                    <figure class="w-28 mx-auto aspect-square">
                        <img class="image-contain" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/benefits-8.png" alt="">
                        <figcaption class="sr-only">Image</figcaption>
                    </figure>
                    <div>
                        <h4>Regular Assessments and Leaderboard</h4>
                        <p>Measure your progress and compete in a dynamic learning environment to stay motivated and accountable</p>
                    </div>
                </li>
                <li class="space-y-5 md:basis-1/4 sm:basis-1/3 basis-full flex-1">
                    <figure class="w-28 mx-auto aspect-square">
                        <img class="image-contain" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/benefits-5.png" alt="">
                        <figcaption class="sr-only">Image</figcaption>
                    </figure>
                    <div>
                        <h4>Certificate from Michigan Ross</h4>
                        <p>Upon successful completion, receive a prestigious certificate from the University of Michigan's Ross School of Business, a testament to your commitment to excellence</p>
                    </div>
                </li>
                <li class="space-y-5 md:basis-1/4 sm:basis-1/3 basis-full flex-1">
                    <figure class="w-28 mx-auto aspect-square">
                        <img class="image-contain" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/benefits-7.png" alt="">
                        <figcaption class="sr-only">Image</figcaption>
                    </figure>
                    <div>
                        <h4>100 Days of Coaching</h4>
                        <p>Becoming Who You Really Are: How to Grow Yourself and Your Organization</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="section bg-light-gray">
        <div>
            <h2>Curriculum</h2>
            <p>This immersive program offers live interactive sessions, strategically scheduled to accommodate the busy schedules of working professionals.</p>
            <p>Designed to empower future C-suite executives, the modular curriculum of this program focuses on three key themes that are the crucial pillars essential for high-performing leaders across roles. </p>

            <div class="space-y-3">
                <div class="collapse collapse-arrow bg-white border-border group border rounded-none">
                    <input type="checkbox" />
                    <div class="collapse-title text-xl font-medium group-focus:text-primary">
                        <h3 class="mb-0 text-inherit">Theme 1 - Lead with Confidence</h3>
                    </div>
                    <div class="collapse-content">
                        <h4>Strategic Leadership: Impact Through the Competing Values Framework</h4>
                        <p>This transformative session empowers CXOs to elevate their leadership impact by exploring the renowned Competing Values Framework. Participants will delve into the core components of strategic leadership, enhancing their decision-making under pressure, navigating complex environments, and fostering talent development. By embracing the Competing Values Framework, participants will gain research-backed insights to drive innovation, cultivate high-performance cultures, and expand into new markets, ultimately achieving positive results for their organizations and propelling their careers forward.</p>

                        <h4>Scaling Leadership: Optimizing Systems and Processes for Team Success</h4>
                        <p>Designed for executives overseeing multiple teams and leaders, this session explores the unique challenges and strategies involved in leading at scale. Participants will delve into systems thinking, organizational design, and process optimization to maximize efficiency and effectiveness. Key topics include fostering collaboration among leaders, aligning goals across teams, and implementing scalable leadership practices to drive consistent results across the organization.</p>

                        <h4>Power and Politics: Navigating the Organizational Landscape</h4>
                        <p>This session delves into the often unspoken dynamics of power and politics within organizations. Participants will gain a nuanced understanding of navigating organizational politics and harnessing the power of social capital to achieve their goals. Topics covered include building and leveraging relationships, managing conflict, influencing without authority, and managing conflict constructively. Through practical exercises and real-world scenarios, participants will develop the skills and confidence to thrive in complex organizational environments.</p>

                        <h4>Leading with Resilience: Effective Decision-Making Under Pressure</h4>
                        <p>In today's volatile business landscape, the ability to lead effectively under pressure is a critical differentiator for executives. This session equips participants with the resilience and decision-making skills needed to navigate crises, uncertainty, and high-stakes situations with confidence and composure. Participants will delve into the psychology of stress, learn to manage their emotional responses and develop frameworks for making sound decisions even when facing intense challenges. The session will also explore strategies for building trust, fostering open communication, and maintaining a calm and focused demeanor, ensuring that participants can effectively guide their teams and organizations through turbulent times.</p>

                        <h4>Leading Authentically: Personal Transformation as the Catalyst </h4>
                        <p>Authenticity and personal growth are the foundations for leading transformational change. This session empowers executives to embark on a journey of self-discovery, recognizing that personal change is the catalyst for inspiring organizational change. Participants will explore the power of self-awareness, learn to identify their values, strengths, and areas for growth, and develop strategies for leading with integrity. The session will delve into the importance of aligning actions with values, building trust through vulnerability, and cultivating meaningful relationships that drive positive change. By embracing personal transformation, executives will unlock their full leadership potential and become catalysts for lasting change within their organizations.</p>
                    </div>
                </div>
                <div class="collapse collapse-arrow bg-white border-border group border rounded-none">
                    <input type="checkbox" />
                    <div class="collapse-title text-xl font-medium group-focus:text-primary">
                        <h3 class="mb-0 text-inherit">Theme 2 - Innovate Fearlessly</h3>
                    </div>
                    <div class="collapse-content">
                        <h4>Leading Innovation Strategy: Leading to Innovate While Managing Risk</h4>
                        <p>Innovation is the lifeblood of sustainable growth, yet leading it requires a strategic mindset and a deep understanding of the innovation process. This session empowers executives to become catalysts for innovation within their organizations. Participants will explore the core principles of innovation, learn to evaluate and prioritize different innovation strategies and develop frameworks for assessing and managing risk. The session will also delve into fostering a culture of innovation, building cross-functional teams, and aligning innovation efforts with overall business objectives.</p>

                        <h4>Understanding Value Generation Through Your Customers</h4>
                        <p>In the age of customer-centricity, sustainable growth hinges on a deep understanding of customer needs, preferences, and behaviors. This session equips executives with the frameworks and tools to uncover hidden customer insights, translate them into value-creating strategies, and build lasting customer relationships. Participants will explore the customer journey, learn to segment and target effectively, and design products and services that resonate with their target audience. The session will also delve into the importance of customer feedback, data-driven decision-making, and continuous innovation to ensure that the organization remains responsive to evolving customer needs.</p>

                        <h4>Driving Innovation And Digital Transformation For The Modern Organization</h4>
                        <p>In today's rapidly changing business landscape, digital transformation and innovation are not just buzzwords but imperatives for survival and growth. This session equips executives with the strategies and insights to lead their organizations through successful digital transformations. Participants will explore emerging technologies, learn to foster a culture of innovation and develop frameworks for implementing and scaling digital initiatives. The session will delve into the challenges and opportunities presented by digital disruption, providing participants with the tools to harness technology to drive growth, enhance customer experiences, and stay ahead of the competition.</p>

                        <h4>Designing Preferable Futures: Learning from the Future</h4>
                        <p>This session addresses how leaders can strategize amid uncertainty. It covers leveraging exponential technologies, including AI and emerging tech like blockchain and IoT. We'll explore foresight and scenario planning as strategic tools, examining their history, institutionalization, and best practices. Case studies will demonstrate how organizations use these methods to future-proof themselves. Leaders will gain insights to navigate uncertainty and develop robust strategies.</p>

                        <h4>Generative AI - An Inflection Point in Business Transformation</h4>
                        <p>Generative AI is reshaping the business landscape at an unprecedented pace. This session provides a comprehensive overview of generative AI's current capabilities, limitations, and potential impact across various industries. Participants will explore real-world use cases, delve into the AI maturity levels of different sectors, and gain insights into leading generative AI offerings from major tech players. This session will equip executives with the knowledge to prepare for an AI-driven future, segment clients based on their AI capabilities, and strategically position their organizations to leverage generative AI for innovation, efficiency, and competitive advantage.</p>
                    </div>
                </div>
                <div class="collapse collapse-arrow bg-white border-border group border rounded-none">
                    <input type="checkbox" />
                    <div class="collapse-title text-xl font-medium group-focus:text-primary">
                        <h3 class="mb-0 text-inherit">Theme 3 - Execute with Passion</h3>
                    </div>
                    <div class="collapse-content">
                        <h4>Future of Work: Challenges and Opportunities for Enhancing Performance</h4>
                        <p>Technological and social forces are changing the world of work rapidly. This session explores multiple forces transforming modern labor markets and workplaces, particularly emphasizing technology and automation. It will blend theory and practice on how these forces are impacting organizational performance and explore opportunities for enhancing it. </p>
                        <p>Key topics include exploring new approaches to human capital management, reimagining human capital practices to hire, retain, and incentivize the workforce, and developing a talent development strategy to address projected skill gaps.</p>

                        <h4>Leading People to Success: People-Driven Thinking</h4>
                        <p>As leaders ascend corporate hierarchies, their work becomes more and more focused on managing people and organizations. This session will help participants unpack critical people leadership skills. Key topics include frameworks to diagnose, reflect on, and improve leadership skills, and evidence-based skills to add to the leader toolkit, including skills for leading others, teams, and organizations.</p>
                        <p>Through the session, participants will practice techniques for resolving conflicts and creating high-value agreements with key stakeholders, leveraging skills to manage team dynamics, achieving congruence across important organizational elements, and managing change in them effectively.</p>

                        <h4>Positive Leadership in Action - Engagement and Empowerment</h4>
                        <p>Positive Leadership is the key to creating empowering, virtuous organizations that have strong employee engagement and consistently outperform competitors.</p>
                        <p>This session will help participants explore techniques to increase employee engagement and leverage empowerment to drive productivity. The session will draw from real-world, evidence-based examples to demonstrate how leaders can affect organizational culture, positivity, and productivity. It will enable participants to deploy the Positive Leadership toolkit in performance improvement initiatives, drive individual and team impact through the use of positive leadership principles, and create measurable action plans for individual, team, and organizational performance improvement using Positive Leadership frameworks.</p>

                        <h4>Executing Business Strategy In Times Of Uncertainty</h4>
                        <p>In an era of unprecedented change and disruption, business leaders must be adept at navigating uncertainty. This session equips executives with the tools to develop agile, resilient strategies that can weather unforeseen challenges and capitalize on emerging opportunities. Participants will explore scenario planning, risk assessment, and decision-making under pressure. They will learn to build organizational flexibility, foster a culture of adaptability, and identify early warning signals of potential disruptions. Through real-world case studies and interactive exercises, executives will gain the confidence to make bold, decisive moves even in the face of ambiguity, ensuring their organizations thrive amidst uncertainty.</p>

                        <h4>Data-Based Decision Making</h4>
                        <p>Strategic and tactical decision problems are too complex to solve a naive intuition and heuristics. Increasingly, making business decisions requires "intelligent" and "data-oriented" decisions, aided by decision support tools and analytics. The ability to use analytics tools and derive data-driven decisions is critical for both managers and firms. In recent years, the toolbox of business analytics has grown and many of them can be implemented with spreadsheet-based models. These tools provide the ability to make decisions supported by data and models. Additionally, many of these tools - Power Query, Power Pivot, machine learning, predictive analytics, optimization and simulations, are available in spreadsheets. This course prepares students to model and manage business decisions with data analytics and decision models.</p>

                        <h4>Communication and Storytelling</h4>
                        <p>Effective communication is the cornerstone of leadership, and the art of storytelling is its most powerful tool. In this session, executives will elevate their communication skills to new heights, learning to craft compelling narratives that resonate with diverse audiences and drive meaningful action. Participants will delve into the science and art of storytelling, exploring how to structure messages, choose impactful content, and develop a personal style that captivates and inspires. By honing their written and oral communication abilities, leaders will gain the confidence to connect with their teams, stakeholders, and customers on a deeper level, ultimately fostering greater engagement and achieving remarkable results. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div>
            <h2>100 Days of Coaching</h2>

            <h3>Becoming Who You Really Are: How to Grow Yourself and Your Organization</h3>
            <div class="md:w-4/5 w-full my-5">
                <figure class="cursor-pointer relative group" onclick="lazyLoadVideo('89EXew_NZBM', this)">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/89EXew_NZBM-HD.jpg" class="image-cover" alt="">
                    <div class="play-btn group-hover:scale-110 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="md:text-6xl sm:text-4xl text-3xl" width="1em" height="1em" viewBox="0 0 256 256">
                            <path fill="currentColor" d="M240 128a15.74 15.74 0 0 1-7.6 13.51L88.32 229.65a16 16 0 0 1-16.2.3A15.86 15.86 0 0 1 64 216.13V39.87a15.86 15.86 0 0 1 8.12-13.82a16 16 0 0 1 16.2.3l144.08 88.14A15.74 15.74 0 0 1 240 128" />
                        </svg>
                    </div>
                </figure>
            </div>

            <h3>Imagine</h3>
            <ul>
                <li>What would happen if leadership development was radically altered?</li>
                <li>What if all your people spent 3-5 minutes a day for 100 days with a world class leadership coach who refused to tell them what to do?</li>
                <li>What if everyone spent 3-5 more minutes imagining a better version of themselves?</li>
                <li>What would happen if every manager, every employee became a leader?</li>
            </ul>

            <p>
                <strong><em>“Becoming Who You Really Are"</em></strong> is a comprehensive 100-day course that is designed to allow you to dive deeply into areas where transformation is most needed in your life, relationships, and the impact you have on others. This online course includes five separate, 4-week (20-day) chapters that collectively combine to create the complete 100-day online course experience.
            </p>

            <h3>Organizations: Invite Your People to Grow</h3>

            <p>
                Invite Your People to Leadership: At last, a way for you to create a program for your people to develop individually while they also move the organization forward. The change is not directed from the top. It comes from all around the organization as each person becomes who they really are. If you are in need of significant transformation for yourself and throughout your organization, this comprehensive 100-day ‘Becoming Who You Really Are’ course design offers an impactful company-wide application.
            </p>
            <p>
                Now organizations can do leadership development in a fashion that is more effective, less expensive, and automatically gives rise to organizational improvement. And, they can supplement current initiatives with this extended application series.
            </p>

            <div class="bg-light-gray md:p-10 p-5">
                <h4>VP OF ENGINEERING, CHESTER KUSTARZ FROM DUO SECURITY HAD THIS TO SAY ABOUT HIS 100 DAYS EXPERIENCE:</h4>

                <h5>Our Goals</h5>
                <ul>
                    <li>Build a management team centered around positive leadership</li>
                    <li>Find training resources to improve our management and leadership abilities</li>
                </ul>

                <p><em>"The content is spot on for our goal of positive leadership. It provides many different layers and approaches to teach the material. By making it a daily habit, it becomes a constant reminder of the type of leaders we aspire to be. The format is perfect for rolling it out at our organization. It is low cost. Multiple sessions allow us to send another batch of leaders through the training. It is remote learning which makes it accessible by all"</em></p>
            </div>
        </div>
    </section>
    <section class="section-y">
        <div class="section-x">
            <h2>Faculty</h2>
            <p>The CXO Leadership Program is delivered by Michigan Ross faculty who are experts in learning and leading. With their unique insights and industry expertise, the distinguished Ross faculty will lead you through an action-based learning experience. </p>
        </div>

        <div class="relative">
            <button name="slide previous" aria-label="slide previous" class="faculty-slick-prev md:left-32 left-2 slick-btn">
                <svg class="rotate-180" xmlns="http://www.w3.org/2000/svg" width="0.48em" height="1em" viewBox="0 0 608 1280">
                    <g transform="translate(608 0) scale(-1 1)">
                        <path fill="currentColor" d="M595 288q0 13-10 23L192 704l393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10L23 727q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23" />
                    </g>
                </svg>
            </button>
            <button name="slide next" aria-label="slide next" class="faculty-slick-next md:right-32 right-2 slick-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="0.48em" height="1em" viewBox="0 0 608 1280">
                    <g transform="translate(608 0) scale(-1 1)">
                        <path fill="currentColor" d="M595 288q0 13-10 23L192 704l393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10L23 727q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23" />
                    </g>
                </svg>
            </button>

            <div class="slick-slider-faculty md:px-44 px-5 relative z-0">
                <div class="p-6 h-full">
                    <figure class="aspect-square mb-3 w-full overflow-hidden group">
                        <img class="image-cover" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/Andrew-Wu.png" alt="">
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Andrew Wu</p>
                    <p class="mb-2 text-left text-sm">Assistant Professor of Technology and Operations; Stein Research Scholar; Michael R. and Mary Kay Hallman Fellow</p>
                </div>
                <div class="p-6 h-full">
                    <figure class="aspect-square mb-3 w-full overflow-hidden group">
                        <img class="image-cover" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/Brad-Killaly.png" alt="">
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Brad Killaly</p>
                    <p class="mb-2 text-left text-sm">Clinical Associate Professor of Strategy</p>
                </div>
                <div class="p-6 h-full">
                    <figure class="aspect-square mb-3 w-full overflow-hidden group">
                        <img class="image-cover" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/Hyun-Soo-Ahn.png" alt="">
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Hyun-Soo Ahn</p>
                    <p class="mb-2 text-left text-sm">Ford Motor Company Co-Director of the Joel D. Tauber Institute for Global Operations; Professor of Technology and Operations</p>
                </div>
                <div class="p-6 h-full">
                    <figure class="aspect-square mb-3 w-full overflow-hidden group">
                        <img class="image-cover" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/Izak-Duenyas.png" alt="">
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Izak Duenyas</p>
                    <p class="mb-2 text-left text-sm">Herrick Professor of Business; Professor of Technology and Operations; Professor of Industrial and Operations Engineering; Faculty Director, Executive MBA Program</p>
                </div>
                <div class="p-6 h-full">
                    <figure class="aspect-square mb-3 w-full overflow-hidden group">
                        <img class="image-cover" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/Lindy-Greer.png" alt="">
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Lindy Greer</p>
                    <p class="mb-2 text-left text-sm">Clinical Associate Professor of Strategy</p>
                </div>
                <div class="p-6 h-full">
                    <figure class="aspect-square mb-3 w-full overflow-hidden group">
                        <img class="image-cover" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/Maxim-Sytch.png" alt="">
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Maxim Sytch</p>
                    <p class="mb-2 text-left text-sm">Professor of Management and Organizations</p>
                </div>
                <div class="p-6 h-full">
                    <figure class="aspect-square mb-3 w-full overflow-hidden group">
                        <img class="image-cover" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/Prof.-Dr.-M.-S.-Krishnan.png" alt="">
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">M. S. Krishnan</p>
                    <p class="mb-2 text-left text-sm">Faculty Director; Accenture Professor of Computer Information Systems; Professor of Technology & Operations</p>
                </div>
                <div class="p-6 h-full">
                    <figure class="aspect-square mb-3 w-full overflow-hidden group">
                        <img class="image-cover" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/Nigel-Melville.png" alt="">
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Nigel Melville</p>
                    <p class="mb-2 text-left text-sm">Associate Professor of Technology and Operations</p>
                </div>
                <div class="p-6 h-full">
                    <figure class="aspect-square mb-3 w-full overflow-hidden group">
                        <img class="image-cover" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/Ravi-Anupindi.png" alt="">
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Ravi Anupindi</p>
                    <p class="mb-2 text-left text-sm">Colonel William G. and Ann C. Svetlich Professor of Operations Research and Management; Professor of Technology & Operations; Faculty Director, Center for Value Chain Innovation</p>
                </div>
                <div class="p-6 h-full">
                    <figure class="aspect-square mb-3 w-full overflow-hidden group">
                        <img class="image-cover" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/Ruslan-Momot.png" alt="">
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Ruslan Momot</p>
                    <p class="mb-2 text-left text-sm">Assistant Professor of Technology and Operations</p>
                </div>
                <div class="p-6 h-full">
                    <figure class="aspect-square mb-3 w-full overflow-hidden group">
                        <img class="image-cover" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/Sanjeev-Kumar.png" alt="">
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Sanjeev Kumar</p>
                    <p class="mb-2 text-left text-sm">Lecturer of Technology and Operations</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-y">
        <div class="section-x">
            <h2>Global Industry Experts</h2>
        </div>

        <div class="relative">
            <button name="slide previous" aria-label="slide previous" class="global-experts-slick-prev md:left-32 left-2 slick-btn">
                <svg class="rotate-180" xmlns="http://www.w3.org/2000/svg" width="0.48em" height="1em" viewBox="0 0 608 1280">
                    <g transform="translate(608 0) scale(-1 1)">
                        <path fill="currentColor" d="M595 288q0 13-10 23L192 704l393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10L23 727q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23" />
                    </g>
                </svg>
            </button>
            <button name="slide next" aria-label="slide next" class="global-experts-slick-next md:right-32 right-2 slick-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="0.48em" height="1em" viewBox="0 0 608 1280">
                    <g transform="translate(608 0) scale(-1 1)">
                        <path fill="currentColor" d="M595 288q0 13-10 23L192 704l393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10L23 727q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23" />
                    </g>
                </svg>
            </button>

            <div class="slick-slider-global-experts md:px-44 px-5 relative z-0">
                <div class="p-6 h-full">
                    <figure class="aspect-square mb-3 w-full overflow-hidden group">
                        <img class="image-cover" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/Anton-Musgrave.jpg.webp" alt="">
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Anton Musgrave</p>
                    <p class="mb-2 text-left text-sm">Futurist and Business Strategist</p>
                </div>
                <div class="p-6 h-full">
                    <figure class="aspect-square mb-3 w-full overflow-hidden group">
                        <img class="image-cover" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/Edward-Rogers.jpg.webp" alt="">
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Edward Rogers</p>
                    <p class="mb-2 text-left text-sm">Ex Chief Knowledge Officer at NASA</p>
                </div>
                <div class="p-6 h-full">
                    <figure class="aspect-square mb-3 w-full overflow-hidden group">
                        <img class="image-cover" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/Medini-Singh.png" alt="">
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Medini Singh</p>
                    <p class="mb-2 text-left text-sm">Professor of Operational Excellence</p>
                </div>
                <div class="p-6 h-full">
                    <figure class="aspect-square mb-3 w-full overflow-hidden group">
                        <img class="image-cover" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/Olivier-Tabatoni.jpg.webp" alt="">
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Olivier Tabatoni</p>
                    <p class="mb-2 text-left text-sm">Professor of Finance and Strategy</p>
                </div>
                <div class="p-6 h-full">
                    <figure class="aspect-square mb-3 w-full overflow-hidden group">
                        <img class="image-cover" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/Jamie-Anderson.jpg.webp" alt="">
                    </figure>
                    <p class="md:text-xl text-lg font-semibold mt-3 mb-0">Jamie Anderson</p>
                    <p class="mb-2 text-left text-sm">Professor of Creative Leadership</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div>
            <div class="section-x">
                <h2>Certificate</h2>
                <p>Upon completing the program, you will receive the CXO Leadership Program certificate from Michigan Ross Executive Education.</p>
            </div>
            <div class="relative md:min-h-[600px] min-h-[400px]">
                <div class="md:w-1/2 w-4/5 md:h-[80%] h-[60%] absolute bg-light-gray inset-1/2 z-20 -translate-x-1/2 -translate-y-1/2">
                    <figure class="h-full border-2 border-secondary bg-white">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/certificate-ross.png" alt="" class="image-contain">
                    </figure>

                </div>
                <div class="h-[50%] w-full bg-primary flex flex-col justify-end section-x absolute z-10 bottom-0 left-0">
                    <p class="text-xs text-gray-300">Note: Certificate image is for illustrative purposes only and may be subject to change at the discretion of the University</p>
                </div>
            </div>

        </div>
    </section>
    <section class="section">
        <div>
            <h2>A World-Class Experience</h2>
            <p>We strive to make every aspect of your program a world-class experience. Our program directors work closely with faculty before, during, and after the program to ensure you achieve your objectives. Program managers facilitate a seamless transition during the sessions and assist with anything you might need.</p>

            <br>

            <h4>
                You will be learning alongside people with roles including:
            </h4>
            <ul class="list-none pl-0 flex flex-wrap gap-3">
                <li class="px-5 py-3 border md:w-fit w-full border-secondary">Chief Executive Officer</li>
                <li class="px-5 py-3 border md:w-fit w-full border-secondary">Managing Director</li>
                <li class="px-5 py-3 border md:w-fit w-full border-secondary">Member of the Board</li>
                <li class="px-5 py-3 border md:w-fit w-full border-secondary">Founder/Partner</li>
                <li class="px-5 py-3 border md:w-fit w-full border-secondary">Executive Director</li>
                <li class="px-5 py-3 border md:w-fit w-full border-secondary">Chief Operating Officer</li>
                <li class="px-5 py-3 border md:w-fit w-full border-secondary">Regional Director</li>
                <li class="px-5 py-3 border md:w-fit w-full border-secondary">Country Head</li>
                <li class="px-5 py-3 border md:w-fit w-full border-secondary">Business Head</li>
                <li class="px-5 py-3 border md:w-fit w-full border-secondary">General Manager</li>
                <li class="px-5 py-3 border md:w-fit w-full border-secondary">Vice President</li>
                <li class="px-5 py-3 border md:w-fit w-full border-secondary">Regional Head</li>
            </ul>


        </div>
    </section>
    <section class="section flex md:gap-10 gap-5 md:flex-row flex-col-reverse">
        <div class="flex-1">
            <h2>Michigan Ross</h2>
            <p>Founded in 1924, the Stephen M. Ross School of Business at the University of Michigan is committed to building a better world through business. Through powerful ideas, purpose-driven leaders, and positive impact, we use business to make a meaningful difference in the world.</p>
            <ul class="list-none pl-0 divide-y divide-third">
                <li class="flex gap-5 py-6">
                    <span style="font-family: Atkinson Hyperlegible;" class="text-primary font-bold md:text-6xl text-5xl">#1</span>
                    <p class="mb-0">
                        <span class="block font-medium">
                            EXECUTIVE EDUCATION PROVIDER IN NORTH AMERICA
                        </span>
                        <span class="block">
                            – Financial Times, 2023
                        </span>
                    </p>
                </li>
                <li class="flex gap-5 py-6">
                    <span style="font-family: Atkinson Hyperlegible;" class="text-primary font-bold md:text-6xl text-5xl">#1</span>
                    <p class="mb-0">
                        <span class="block font-medium">
                            FACULTY IN OPEN PROGRAMS IN THE U.S.
                        </span>
                        <span class="block">
                            – Financial Times, 2023
                        </span>
                    </p>
                </li>
            </ul>
        </div>
        <div class="flex-1">
            <figure class="w-full">
                <img class="image-contain" loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/dei-about.png" alt="">
            </figure>
        </div>
    </section>
    <section class="section bg-light-gray">
        <div>
            <h2>Who is This Program for?</h2>
            <p>This program is tailored for distinguished C-suite executives who are eager to stay ahead of the curve and lead their organizations to unprecedented heights. If you are a visionary leader committed to continuous growth and innovation, this program is your gateway to mastering the art of strategic leadership, fostering a culture of innovation, and executing with precision in an ever-evolving business landscape.</p>

            <ul class="list-none space-y-2 pl-0 font-medium">
                <li class="flex md:items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-background md:text-4xl text-2xl shrink-0" width="1em" height="1em" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M10.5 15.25A.74.74 0 0 1 10 15l-3-3a.75.75 0 0 1 1-1l2.47 2.47L19 5a.75.75 0 0 1 1 1l-9 9a.74.74 0 0 1-.5.25" />
                        <path fill="currentColor" d="M12 21a9 9 0 0 1-7.87-4.66a8.7 8.7 0 0 1-1.07-3.41a9 9 0 0 1 4.6-8.81a8.7 8.7 0 0 1 3.41-1.07a8.9 8.9 0 0 1 3.55.34a.75.75 0 1 1-.43 1.43a7.6 7.6 0 0 0-3-.28a7.4 7.4 0 0 0-2.84.89a7.5 7.5 0 0 0-2.2 1.84a7.42 7.42 0 0 0-1.64 5.51a7.4 7.4 0 0 0 .89 2.84a7.5 7.5 0 0 0 1.84 2.2a7.42 7.42 0 0 0 5.51 1.64a7.4 7.4 0 0 0 2.84-.89a7.5 7.5 0 0 0 2.2-1.84a7.42 7.42 0 0 0 1.64-5.51a.75.75 0 1 1 1.57-.15a9 9 0 0 1-4.61 8.81A8.7 8.7 0 0 1 12.93 21z" />
                    </svg>
                    10+ years of work experience and proven success in leading high-performing teams / impactful projects
                </li>
                <li class="flex md:items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-background md:text-4xl text-2xl shrink-0" width="1em" height="1em" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M10.5 15.25A.74.74 0 0 1 10 15l-3-3a.75.75 0 0 1 1-1l2.47 2.47L19 5a.75.75 0 0 1 1 1l-9 9a.74.74 0 0 1-.5.25" />
                        <path fill="currentColor" d="M12 21a9 9 0 0 1-7.87-4.66a8.7 8.7 0 0 1-1.07-3.41a9 9 0 0 1 4.6-8.81a8.7 8.7 0 0 1 3.41-1.07a8.9 8.9 0 0 1 3.55.34a.75.75 0 1 1-.43 1.43a7.6 7.6 0 0 0-3-.28a7.4 7.4 0 0 0-2.84.89a7.5 7.5 0 0 0-2.2 1.84a7.42 7.42 0 0 0-1.64 5.51a7.4 7.4 0 0 0 .89 2.84a7.5 7.5 0 0 0 1.84 2.2a7.42 7.42 0 0 0 5.51 1.64a7.4 7.4 0 0 0 2.84-.89a7.5 7.5 0 0 0 2.2-1.84a7.42 7.42 0 0 0 1.64-5.51a.75.75 0 1 1 1.57-.15a9 9 0 0 1-4.61 8.81A8.7 8.7 0 0 1 12.93 21z" />
                    </svg>
                    Have at least a Graduate degree
                </li>
            </ul>

            <a href="/eligibility" class="cbtn-primary">Apply Now</a>
        </div>
        <div>

        </div>
    </section>
    <section class="section">
        <div>
            <h2>Inquire For Your Organisation</h2>
            <p>Taking this programme with colleagues can enhance communication and accelerate impact within your organisation. It also fosters meaningful discussions among participants.</p>
            <a href="/get-in-touch" class="cbtn-outline">Get In Touch</a>
        </div>
    </section>
</article>

<?php get_footer(); ?>