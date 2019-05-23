# frozen_string_literal: true

module KepplerBooking
  # Room Model
  class Room < ApplicationRecord
    include ActivityHistory
    include CloneRecord
    include Uploadable
    include Downloadable
    include Sortable
    include Searchable
    mount_uploader :cover, AttachmentUploader
    has_many :images, :dependent => :destroy
    has_many :prices_rooms, :dependent => :destroy
    accepts_nested_attributes_for :prices_rooms, :reject_if => :all_blank, :allow_destroy => true
    accepts_nested_attributes_for :images, :reject_if => :all_blank, :allow_destroy => true
    validates_uniqueness_of :name
    acts_as_list
    acts_as_paranoid

    def self.index_attributes
      %i[name description_small cover permalink]
    end
  end
end
