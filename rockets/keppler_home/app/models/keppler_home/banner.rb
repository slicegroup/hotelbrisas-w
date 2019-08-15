# frozen_string_literal: true

module KepplerHome
  # Banner Model
  class Banner < ApplicationRecord
    include ActivityHistory
    include CloneRecord
    include Uploadable
    include Downloadable
    include Sortable
    include Searchable
    mount_uploader :image, AttachmentUploader
    acts_as_list
    acts_as_paranoid
    validates :image, presence: true
    validate :check_actives, on: [:create, :edit]
    before_destroy :test

    scope :actives, -> { where(active: true) }

    def self.index_attributes
      %i[image title subtitle]
    end

    def check_actives
      if Banner.actives.count >= 5 && active
        errors.add :active, 'Ya se encuentran 5 banners activos'
      end
    end

    private

      def test
        byebug
      end
  end
end
