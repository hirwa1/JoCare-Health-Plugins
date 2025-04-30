# JoCare WordPress Plugins

## Overview
The JoCare WordPress Plugins, developed by [trusted-kigali-developers](https://kigalidevelopers.com/), are specialized tools designed to enhance the functionality of the JoCare health organization's WordPress platform. These plugins empower website administrators to embed interactive, health-focused tools that support women’s reproductive health. The current suite includes the **JoCare Ovulation Calculator** and **JoCare Due Date Calculator**, with innovative plugins like the **JoCare Fertility Tracker** and **JoCare Pregnancy Wellness Dashboard** in active development. Built for seamless integration, accuracy, and usability, these plugins enrich user engagement and align with JoCare’s mission to advance women’s health education.

## Purpose
The JoCare plugins are core components of the JoCare WordPress ecosystem, tailored to deliver scientifically grounded tools for fertility and pregnancy management. They enable health-focused websites to provide actionable insights, fostering informed decision-making for users. Lightweight, customizable, and optimized for WordPress, these plugins ensure reliability and ease of use for both administrators and end users.

## Plugins

### 1. JoCare Ovulation Calculator
**Stable Tag**: 0.4  
**Requires**: WordPress 4.7+, PHP 7.0  
**License**: GPLv2 or later  

The JoCare Ovulation Calculator estimates ovulation likelihood based on the user’s last menstrual period and average cycle length. It uses data from peer-reviewed research (Sarah Johnson et al., 2018) to display percentage-based ovulation probabilities on an interactive calendar.  

**Key Features**:
- **Input**: First day of last period and average cycle length.
- **Output**: Calendar with ovulation days marked in purple and percentage probabilities.
- **Integration**: Shortcode (`[jocare-ovulation-calculator]`) or widget.
- **Accuracy Note**: Relies on the calendar method; ovulation tests are more precise.

**Use Case**: Ideal for fertility blogs, women’s health platforms, or educational sites.

### 2. JoCare Due Date Calculator
**Stable Tag**: 1.0.4  
**Requires**: WordPress 4.7+, PHP 7.0  
**License**: GPLv2 or later  

The JoCare Due Date Calculator estimates a baby’s due date using the first day of the last menstrual period and average cycle length to approximate ovulation and conception.  

**Key Features**:
- **Input**: Last period start date and cycle length.
- **Output**: Estimated due date.
- **Integration**: Shortcode (`[jocare-due-date-calculator]`) or widget.
- **Multilingual**: Supports English, French, and Spanish (since v1.1).
- **Accuracy Note**: Provides estimates; consult healthcare providers for precision.

**Use Case**: Perfect for pregnancy blogs, parenting sites, or health organizations.

### 3. JoCare Fertility Tracker (In Development)
**Status**: Beta  
**Expected Release**: Q3 2025  
**Requires**: WordPress 5.0+, PHP 7.2  

The JoCare Fertility Tracker will enable users to log and monitor fertility indicators, such as basal body temperature, cervical mucus, and ovulation test results, alongside cycle data. It will generate personalized fertility reports and predictive analytics for optimal conception timing.  

**Planned Features**:
- **Input**: Daily fertility metrics via an interactive form.
- **Output**: Visual fertility charts and conception probability forecasts.
- **Integration**: Shortcode and widget with customizable privacy settings.
- **Unique Feature**: Machine learning-based predictions using anonymized, aggregated data (GDPR-compliant).

**Use Case**: Designed for women actively planning pregnancy and health platforms offering advanced fertility tools.

### 4. JoCare Pregnancy Wellness Dashboard (In Development)
**Status**: Prototype  
**Expected Release**: Q4 2025  
**Requires**: WordPress 5.0+, PHP 7.2  

The JoCare Pregnancy Wellness Dashboard will provide pregnant users with a comprehensive tool to track pregnancy milestones, nutrition, and wellness goals. It will include reminders for prenatal appointments and curated educational content tailored to each trimester.  

**Planned Features**:
- **Input**: Pregnancy stage, health metrics, and lifestyle preferences.
- **Output**: Interactive dashboard with progress trackers and personalized tips.
- **Integration**: Embeddable via shortcode or widget; supports multisite WordPress setups.
- **Unique Feature**: Integration with wearable devices for real-time health data (e.g., heart rate, sleep patterns).

**Use Case**: Ideal for maternity blogs, obstetric clinics, or health platforms supporting expectant mothers.

## Installation
All JoCare plugins are designed for easy integration into the JoCare WordPress platform:
1. **From WordPress Admin**:
   - Go to **Plugins > Add New**.
   - Search for the desired JoCare plugin.
   - Install and activate.
2. **Manual Installation**:
   - Upload the plugin folder to `/wp-content/plugins/`.
   - Activate via the **Plugins** menu.
3. **Configuration**:
   - Access settings under **Tools** for each plugin.
   - Use shortcodes or widgets to embed tools in pages, posts, or sidebars.

## Technical Details
- **Compatibility**: Tested up to WordPress 5.9.1 (Ovulation), 6.0 (Due Date); upcoming plugins will support 5.0+.
- **Dependencies**: PHP 7.0+ (7.2+ for upcoming plugins).
- **Customization**: Admins can adjust display options; Due Date Calculator supports language selection.
- **Performance**: Optimized for minimal resource usage.
- **Scientific Basis**: Ovulation Calculator leverages peer-reviewed data; Due Date Calculator uses obstetric standards; upcoming plugins will incorporate advanced analytics.

## Why JoCare Plugins?
These plugins are purpose-built for the JoCare WordPress platform, aligning with JoCare’s mission to empower women’s health:
- **Native Integration**: Seamless compatibility with WordPress for effortless setup.
- **User-Centric Design**: Intuitive interfaces with clear, actionable outputs.
- **Innovative Roadmap**: Upcoming plugins introduce cutting-edge features like predictive analytics and wearable integration.
- **Reliability**: Grounded in scientific methods, with clear guidance on limitations.
- **Community Impact**: Supports JoCare’s goal of accessible, education-driven health tools.

## Credits
Developed by [trusted-kigali-developers](https://kigalidevelopers.com/) for [JoCare](https://www.jocare.rw/), a leader in women’s reproductive health.

## License
All plugins are licensed under [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html), ensuring open-source flexibility.

## Future Development
The JoCare team is committed to:
- Releasing the Fertility Tracker and Pregnancy Wellness Dashboard in 2025.
- Expanding platform compatibility beyond WordPress.
- Enhancing AI-driven features for personalized health insights.
- Integrating with global health initiatives to broaden impact.