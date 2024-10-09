
<?php /* Template Name: Pricing Table */ ?>
<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/fixedheader/4.0.1/js/dataTables.fixedHeader.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/fixedheader/4.0.1/js/fixedHeader.dataTables.js"></script>



<script type="text/javascript">


    $(document).ready(function() {
    new DataTable('#pricingTable', {
    info: false,
    ordering: false,
    paging: false,
    fixedHeader: true,
    responsive: true,
    //bFilter: false,
    //scrollX: true
    //scrollCollapse: true,
    //scrollY: '50vh'
});
        });
</script>
<script type="text/javascript">
</script>
<style>
  a {
    text-decoration: none !important;
}
.fusion-is-sticky .fusion-header-v1 .fusion-header, .fusion-is-sticky .fusion-header-v2 .fusion-header, .fusion-is-sticky .fusion-header-v3 .fusion-header, .fusion-is-sticky .fusion-header-v6 .fusion-header, .fusion-is-sticky .fusion-header-v7 .fusion-header {
    position: absolute !important;
}
th {
    background: white !important;
}
a.startuplink {
    display: block;
    padding: 8px;
    text-align: center;
    background: #e21a22;
    color: white;
    border-radius: 5px;
    margin-top: 10px;
    width: 80%;
}
a.growthlink {
    display: block;
    padding: 8px;
    text-align: center;
    background: #e21a22;
    color: white;
    border-radius: 5px;
    margin-top: 10px;
    width: 80%;
}
a.scalelink {
    display: block;
    padding: 8px;
    text-align: center;
    background: #e21a22;
    color: white;
    border-radius: 5px;
    margin-top: 10px;
    width: 80%;
}
th {
    font-family: sans-serif;
    font-weight: normal !important;
}
span.startupprice {
    font-size: 42px;
    color: #dc0206 !important;
}
span.growthprice {
    font-size: 42px;
    color: #dc0206 !important;
}
span.scaleprice {
    font-size: 42px;
    color: #dc0206 !important;
}
th.planname {
    font-size: 40px;
    font-family: sans-serif;
    color: #0e4a72 !important;
}
span.contactnumber {
    font-family: sans-serif;
    font-size: 14px;
}
Div#optiondiv {
    text-align: center !important;
}
div#optiondiv select#contacts {
    width: 140px !important;
}
div#optiondiv {
    font-size: 20px;
}
</style>
<script>
$(document).ready(function() {
    // Price data for different contact options
    const priceData = {
        1000: { startup: 29, growth: 59, scale: 99 },
        2500: { startup: 49, growth: 79, scale: 149 },
        5000: { startup: 79, growth: 109, scale: 199 },
        10000: { startup: 119, growth: 159, scale: 279 },
        15000: { startup: 179, growth: 209, scale: 329 },
        20000: { startup: 229, growth: 259, scale: 379 },
        25000: { startup: 279, growth: 309, scale: 429 },
        30000: { startup: 309, growth: 339, scale: 459 },
        40000: { startup: 369, growth: 399, scale: 519 },
        50000: { startup: 249, growth: 459, scale: 579 }
    };

    // When the select dropdown changes
    $('#contacts').change(function() {
        const selectedValue = $(this).val(); // Get the selected value

        // Get the corresponding prices for the selected value
        const prices = priceData[selectedValue];

        // Update the prices in the table
        $('.startupprice').text(`$${prices.startup}/mo`);
        $('.growthprice').text(`$${prices.growth}/mo`);
        $('.scaleprice').text(`$${prices.scale}/mo`);

        // Update the contact number displayed under the price
        $('.contactnumber').each(function() {
            $(this).text(`${selectedValue} `);
        });
    });
});
</script>
    <script>
        $(document).ready(function() {
            // Define the links for each contact value and plan
            const links = {
                1000: {
                    startup: 'https://example.com/startup-1000',
                    growth: 'https://example.com/growth-1000',
                    scale: 'https://example.com/scale-1000',
                },
                2500: {
                    startup: 'https://example.com/startup-2500',
                    growth: 'https://example.com/growth-2500',
                    scale: 'https://example.com/scale-2500',
                },
                5000: {
                    startup: 'https://example.com/startup-5000',
                    growth: 'https://example.com/growth-5000',
                    scale: 'https://example.com/scale-5000',
                },
                // Continue for all values...
                10000: {
                    startup: 'https://example.com/startup-10000',
                    growth: 'https://example.com/growth-10000',
                    scale: 'https://example.com/scale-10000',
                },
                15000: {
                    startup: 'https://example.com/startup-15000',
                    growth: 'https://example.com/growth-15000',
                    scale: 'https://example.com/scale-15000',
                },
                20000: {
                    startup: 'https://example.com/startup-20000',
                    growth: 'https://example.com/growth-20000',
                    scale: 'https://example.com/scale-20000',
                },
                25000: {
                    startup: 'https://example.com/startup-25000',
                    growth: 'https://example.com/growth-25000',
                    scale: 'https://example.com/scale-25000',
                },
                30000: {
                    startup: 'https://example.com/startup-30000',
                    growth: 'https://example.com/growth-30000',
                    scale: 'https://example.com/scale-30000',
                },
                40000: {
                    startup: 'https://example.com/startup-40000',
                    growth: 'https://example.com/growth-40000',
                    scale: 'https://example.com/scale-40000',
                },
                50000: {
                    startup: 'https://example.com/startup-50000',
                    growth: 'https://example.com/growth-50000',
                    scale: 'https://example.com/scale-50000',
                },
            };

            // Event listener for dropdown change
            $('#contacts').change(function() {
                const selectedValue = $(this).val();
                const selectedLinks = links[selectedValue];

                // Update button links based on selected value
                if (selectedLinks) {
                    $('.startuplink').attr('href', selectedLinks.startup);
                    $('.growthlink').attr('href', selectedLinks.growth);
                    $('.scalelink').attr('href', selectedLinks.scale);
                }
            });
        });
    </script>
<div> 
   <div id="optiondiv">
   <label>How Many Contacts Needed</label> <br/>
  <select class="select-wrap" name="contacts" id="contacts">
    <option value="1000">1000</option>
    <option value="2500">2500</option>
    <option value="5000">5000</option>
    <option value="10000">10000</option>
    <option value="15000">15000</option>
    <option value="20000">20000</option>
    <option value="25000">25000</option>
    <option value="30000">30000</option>
    <option value="40000">40000</option>
    <option value="50000">50000</option>
  </select>
 </div> 
  <table id="pricingTable" class="display" style="width:100%">
    <thead>
        <tr>
            <th></th>
            <th class="planname">Startup</th>
            <th class="planname">Growth</th>
            <th class="planname">Scale</th>

        </tr>
                <tr>
            <th></th>
            <th><span class="startupprice">$29/mo</span> <br/><span class="contactnumber">1000</span> Contacts
                <a class="startuplink" href="https://example.com/test_3cs5mQbk22EO2He147" target="_blank">Sign Up</a>
            </th>
            <th><span class="growthprice">$59/mo</span> <br/><span class="contactnumber">1000</span> Contacts
                <a class="growthlink" href="https://example.com/test_3cs5mQbk22EO2He147" target="_blank">Sign Up</a>
            </th>
            <th><span class="scaleprice">$99/mo</span> <br/><span class="contactnumber">1000</span> Contacts
                <a class="scalelink" href="https://example.com/test_dR6bLefAicfogy428v" target="_blank">Sign Up</a>    
            </th>

        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Email Marketing</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
        </tr>
        <tr>
            <td>eoScribe (AI Assitant)</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
        </tr>
        <tr>
            <td>Subject Line Helper</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
        </tr>
        <tr>
            <td>Variable Data</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
        </tr>
        <tr>
            <td>Content Optimizer</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
        </tr>
            <tr>
            <td>Drag & Drop Builder</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
        </tr>
        </tr>
            <tr>
            <td>Brand Kit</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
        </tr>
        </tr>
            <tr>
            <td>Image Library</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
        </tr>
        <tr>
            <td>Contact Management</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
        </tr>
        <tr>
            <td>Contact List Segmentation</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
        </tr>
        <tr>
            <td>Email Templates</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
        </tr>
        <tr>
            <td>Newsletter Templates</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
        </tr>
        <tr>
            <td>Guides & Tours</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
        </tr>
        <tr>
            <td>Knowledgebase</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
        </tr>
        <tr>
            <td>Live Chat Support</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
        </tr>
        <tr>
            <td>Email Support</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
        </tr>
        <tr>
            <td>Reports</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
        </tr>
        <tr>
            <td>Lead Scoring</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
        </tr>
        <tr>
            <td>Product Library Builder</td>
            <td>&#10060;</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
        </tr>
        <tr>
            <td>Product Library Website iframe</td>
            <td>&#10060;</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
        </tr>
        <tr>
            <td>Forms</td>
            <td>&#10060;</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
        </tr>
        <tr>
            <td>Journey/Drip Campaigns</td>
            <td>&#10060;</td>
            <td>&#9989;</td>
            <td>&#9989;</td>
        </tr>
        <tr>
            <td>Digital Hub</td>
            <td>&#10060;</td>
            <td>&#10060;</td>
            <td>&#9989;</td>
        </tr>
        <tr>
            <td>Contact Activity Segmentation</td>
            <td>&#10060;</td>
            <td>&#10060;</td>
            <td>&#9989;</td>
        </tr>
        <tr>
            <td>Video & Screen Recording</td>
            <td>&#10060;</td>
            <td>&#10060;</td>
            <td>&#9989;</td>
        </tr>
        <tr>
            <td>Video Email Templates</td>
            <td>&#10060;</td>
            <td>&#10060;</td>
            <td>&#9989;</td>
        </tr>
        <tr>
            <td>Video Landing Pages</td>
            <td>&#10060;</td>
            <td>&#10060;</td>
            <td>&#9989;</td>
        </tr>
        <tr>
            <td>Social Media Creator</td>
            <td>&#10060;</td>
            <td>&#10060;</td>
            <td>&#9989;</td>
        </tr>
        <tr>
            <td>Social Media Scheduler</td>
            <td>&#10060;</td>
            <td>&#10060;</td>
            <td>&#9989;</td>
        </tr>
        <tr>
            <td>Up to 6 Social Media Profiles</td>
            <td>&#10060;</td>
            <td>&#10060;</td>
            <td>&#9989;</td>
        </tr>
        <tr>
            <td>Salesforce CRM Integration</td>
            <td>&#10060;</td>
            <td>&#10060;</td>
            <td>&#9989;</td>
        </tr>
        <tr>
            <td>Pre-built Salesforce Workflow Auto Notification</td>
            <td>&#10060;</td>
            <td>&#10060;</td>
            <td>&#9989;</td>
        </tr>     
    </tbody>
            <tfoot>
            <tr class="border-top fw-semibold fs-6 text-gray-800">
            <td></td>
            <td><a class="startuplink" href="https://example.com/test_3cs5mQbk22EO2He147" target="_blank">Sign Up</a></td>
            <td><a class="growthlink" href="https://example.com/test_3cs5mQbk22EO2He147" target="_blank">Sign Up</a></td>
            <td><a class="scalelink" href="https://example.com/test_dR6bLefAicfogy428v" target="_blank">Sign Up</a></td>
            </tr>
        </tfoot>
</table>

</div>
<?php get_footer(); ?>