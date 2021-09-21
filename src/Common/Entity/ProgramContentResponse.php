<?php

namespace AllDigitalRewards\RewardStack\Common\Entity;

class ProgramContentResponse extends AbstractEntity
{
    protected $program_id;
    protected $my_account_url;
    protected $points_filter;
    protected $site_color;
    protected $google_analytics;
    protected $marketplace_enabled;
    protected $point_visibility;
    protected $reward_terms;
    protected $program_terms;
    protected $return_policy;
    protected $privacy_policy;
    protected $rules;
    protected $contact_us;
    protected $feedback;
    protected $participant_config;
    protected $confirmation_page;
    protected $footer;
    protected $how_it_works;
    protected $issue_date_config;
    protected $reward_form;
    protected $promo_code_config;
    protected $redirect_sso;
    protected $account_dashboard;
    protected $created_at;
    protected $updated_at;
    protected $marketplace_types;
    protected $faqs;
    protected $copyright;
    protected $logo;
    protected $home_banner;
    protected $language_toggler;

    /**
     * @return mixed
     */
    public function getProgramId()
    {
        return $this->program_id;
    }

    /**
     * @param mixed $program_id
     */
    public function setProgramId($program_id): void
    {
        $this->program_id = $program_id;
    }

    /**
     * @return mixed
     */
    public function getMyAccountUrl()
    {
        return $this->my_account_url;
    }

    /**
     * @param mixed $my_account_url
     */
    public function setMyAccountUrl($my_account_url): void
    {
        $this->my_account_url = $my_account_url;
    }

    /**
     * @return mixed
     */
    public function getPointsFilter()
    {
        return $this->points_filter;
    }

    /**
     * @param mixed $points_filter
     */
    public function setPointsFilter($points_filter): void
    {
        $this->points_filter = $points_filter;
    }

    /**
     * @return mixed
     */
    public function getSiteColor()
    {
        return $this->site_color;
    }

    /**
     * @param mixed $site_color
     */
    public function setSiteColor($site_color): void
    {
        $this->site_color = $site_color;
    }

    /**
     * @return mixed
     */
    public function getGoogleAnalytics()
    {
        return $this->google_analytics;
    }

    /**
     * @param mixed $google_analytics
     */
    public function setGoogleAnalytics($google_analytics): void
    {
        $this->google_analytics = $google_analytics;
    }

    /**
     * @return mixed
     */
    public function getMarketplaceEnabled()
    {
        return $this->marketplace_enabled;
    }

    /**
     * @param mixed $marketplace_enabled
     */
    public function setMarketplaceEnabled($marketplace_enabled): void
    {
        $this->marketplace_enabled = $marketplace_enabled;
    }

    /**
     * @return mixed
     */
    public function getPointVisibility()
    {
        return $this->point_visibility;
    }

    /**
     * @param mixed $point_visibility
     */
    public function setPointVisibility($point_visibility): void
    {
        $this->point_visibility = $point_visibility;
    }

    /**
     * @return mixed
     */
    public function getRewardTerms()
    {
        return $this->reward_terms;
    }

    /**
     * @param mixed $reward_terms
     */
    public function setRewardTerms($reward_terms): void
    {
        $this->reward_terms = $reward_terms;
    }

    /**
     * @return mixed
     */
    public function getProgramTerms()
    {
        return $this->program_terms;
    }

    /**
     * @param mixed $program_terms
     */
    public function setProgramTerms($program_terms): void
    {
        $this->program_terms = $program_terms;
    }

    /**
     * @return mixed
     */
    public function getReturnPolicy()
    {
        return $this->return_policy;
    }

    /**
     * @param mixed $return_policy
     */
    public function setReturnPolicy($return_policy): void
    {
        $this->return_policy = $return_policy;
    }

    /**
     * @return mixed
     */
    public function getPrivacyPolicy()
    {
        return $this->privacy_policy;
    }

    /**
     * @param mixed $privacy_policy
     */
    public function setPrivacyPolicy($privacy_policy): void
    {
        $this->privacy_policy = $privacy_policy;
    }

    /**
     * @return mixed
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * @param mixed $rules
     */
    public function setRules($rules): void
    {
        $this->rules = $rules;
    }

    /**
     * @return mixed
     */
    public function getContactUs()
    {
        return $this->contact_us;
    }

    /**
     * @param mixed $contact_us
     */
    public function setContactUs($contact_us): void
    {
        $this->contact_us = $contact_us;
    }

    /**
     * @return mixed
     */
    public function getFeedback()
    {
        return $this->feedback;
    }

    /**
     * @param mixed $feedback
     */
    public function setFeedback($feedback): void
    {
        $this->feedback = $feedback;
    }

    /**
     * @return mixed
     */
    public function getParticipantConfig()
    {
        return $this->participant_config;
    }

    /**
     * @param mixed $participant_config
     */
    public function setParticipantConfig($participant_config): void
    {
        $this->participant_config = $participant_config;
    }

    /**
     * @return mixed
     */
    public function getConfirmationPage()
    {
        return $this->confirmation_page;
    }

    /**
     * @param mixed $confirmation_page
     */
    public function setConfirmationPage($confirmation_page): void
    {
        $this->confirmation_page = $confirmation_page;
    }

    /**
     * @return mixed
     */
    public function getFooter()
    {
        return $this->footer;
    }

    /**
     * @param mixed $footer
     */
    public function setFooter($footer): void
    {
        $this->footer = $footer;
    }

    /**
     * @return mixed
     */
    public function getHowItWorks()
    {
        return $this->how_it_works;
    }

    /**
     * @param mixed $how_it_works
     */
    public function setHowItWorks($how_it_works): void
    {
        $this->how_it_works = $how_it_works;
    }

    /**
     * @return mixed
     */
    public function getIssueDateConfig()
    {
        return $this->issue_date_config;
    }

    /**
     * @param mixed $issue_date_config
     */
    public function setIssueDateConfig($issue_date_config): void
    {
        $this->issue_date_config = $issue_date_config;
    }

    /**
     * @return mixed
     */
    public function getRewardForm()
    {
        return $this->reward_form;
    }

    /**
     * @param mixed $reward_form
     */
    public function setRewardForm($reward_form): void
    {
        $this->reward_form = $reward_form;
    }

    /**
     * @return mixed
     */
    public function getPromoCodeConfig()
    {
        return $this->promo_code_config;
    }

    /**
     * @param mixed $promo_code_config
     */
    public function setPromoCodeConfig($promo_code_config): void
    {
        $this->promo_code_config = $promo_code_config;
    }

    /**
     * @return mixed
     */
    public function getRedirectSso()
    {
        return $this->redirect_sso;
    }

    /**
     * @param mixed $redirect_sso
     */
    public function setRedirectSso($redirect_sso): void
    {
        $this->redirect_sso = $redirect_sso;
    }

    /**
     * @return mixed
     */
    public function getAccountDashboard()
    {
        return $this->account_dashboard;
    }

    /**
     * @param mixed $account_dashboard
     */
    public function setAccountDashboard($account_dashboard): void
    {
        $this->account_dashboard = $account_dashboard;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at): void
    {
        $this->created_at = $created_at;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param mixed $updated_at
     */
    public function setUpdatedAt($updated_at): void
    {
        $this->updated_at = $updated_at;
    }

    /**
     * @return mixed
     */
    public function getMarketplaceTypes()
    {
        return $this->marketplace_types;
    }

    /**
     * @param mixed $marketplace_types
     */
    public function setMarketplaceTypes($marketplace_types): void
    {
        $this->marketplace_types = $marketplace_types;
    }

    /**
     * @return mixed
     */
    public function getFaqs()
    {
        return $this->faqs;
    }

    /**
     * @param mixed $faqs
     */
    public function setFaqs($faqs): void
    {
        $this->faqs = $faqs;
    }

    /**
     * @return mixed
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * @param mixed $copyright
     */
    public function setCopyright($copyright): void
    {
        $this->copyright = $copyright;
    }

    /**
     * @return mixed
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param mixed $logo
     */
    public function setLogo($logo): void
    {
        $this->logo = $logo;
    }

    /**
     * @return mixed
     */
    public function getHomeBanner()
    {
        return $this->home_banner;
    }

    /**
     * @param mixed $home_banner
     */
    public function setHomeBanner($home_banner): void
    {
        $this->home_banner = $home_banner;
    }

    /**
     * @return mixed
     */
    public function getLanguageToggler()
    {
        return $this->language_toggler;
    }

    /**
     * @param mixed $language_toggler
     */
    public function setLanguageToggler($language_toggler): void
    {
        $this->language_toggler = $language_toggler;
    }
}
